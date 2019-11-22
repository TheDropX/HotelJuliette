const express = require("express");
const https = require('https');
const fileUpload = require("express-fileupload");
const bodyParser = require("body-parser");
const mysql = require("mysql");
const path = require("path");
const app = express();
const passport = require("passport");
const FacebookStrategy = require("passport-facebook").Strategy;
const session = require("express-session");
const cookieParser = require("cookie-parser");
const config = require("./config/config");
const fs = require('fs');
const key = fs.readFileSync(process.env.KEY_PATH.toString());
const cert = fs.readFileSync(process.env.CERT_PATH.toString());

const { getHomePage } = require("./routes/index");
const { getTeamPage } = require("./routes/team");
const { getRoomPage, getRoomsPage } = require("./routes/rezervari");
const { getLoginPage } = require("./routes/login");
const { getAccountPage, editAccount } = require("./routes/account");

const port = 2608;

const db = mysql.createConnection({
  host: config.host,
  user: config.username,
  password: config.password,
  database: config.database
});

db.connect(err => {
  if (err) throw err;
  console.log("Connected to database");
});

global.db = db;

app.set("port", process.env.port || port);
app.set("views", __dirname + "/views");
app.set("view engine", "ejs");
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, "public")));
app.use(fileUpload());

app.use(cookieParser());
app.use(session({ secret: process.env.SESSION_SECRET, key: "sid", resave: true, saveUninitialized: true}));
app.use(passport.initialize());
app.use(passport.session());

app.get("/", getHomePage);
app.get("/echipa", getTeamPage);
app.get("/rezervari", getRoomsPage);
app.get("/login", getLoginPage);
app.get("/camera/:type", getRoomPage);
app.get("/account", getAccountPage);

app.get("/privacy", function(req, res) {

  res.render('policy.ejs', {
    title: "Privacy Policy"
  });
  
});

app.post('/editaccount', editAccount);

passport.serializeUser(function(user, done) {
  done(null, user);
});

passport.deserializeUser(function(obj, done) {
  done(null, obj);
});

passport.use(
  new FacebookStrategy(
    {
      clientID: config.facebook_api_key,
      clientSecret: config.facebook_api_secret,
      callbackURL: config.callback_url
    },
    function(accessToken, refreshToken, profile, done) {
      process.nextTick(function() {
        if (config.use_database) {
          db.query("SELECT * from accounts WHERE User_ID ='" + profile.id + "';", (err, rows) => {
              if (err) throw err;
              if (rows && rows.length === 0) {
                db.query("INSERT into accounts (User_ID, Name, Admin, Compartiment, Role, Github, Facebook, Instagram, ProfilePicture) VALUES('" + profile.id + "','" + profile.displayName + "', '1','-','-','-','-','-', 'http://graph.facebook.com/" + profile.id + "/picture?type=square&height=250');");
              }
            }
          );
        }
        return done(null, profile);
      });
    }
  )
);

app.get(
  "/auth/facebook",
  passport.authenticate("facebook", { scope: "email" })
);

app.get(
  "/auth/facebook/callback",
  passport.authenticate("facebook", {
    successRedirect: "/account",
    failureRedirect: "/login"
  }),
  function(req, res) {
    res.redirect("/");
  }
);

app.get("/logout", function(req, res) {
  req.logout();
  res.redirect("/");
});

function ensureAuthenticated(req, res, next) {
  if (req.isAuthenticated()) {
    return next();
  }
  res.redirect("/login");
}

app.use(function(req, res, next) {
  res.status(404);

  if (req.accepts("html")) {
    res.render("errors/404", { url: req.url, title: "Error" });
    return;
  }

  if (req.accepts("json")) {
    res.send({ error: 404, message: "Not found." });
    return;
  }

  res.type("txt").send("Not found");
});

const server = https.createServer({ key: key, cert: cert }, app);

server.listen(port, () => {
  console.log(`Server running on port: ${port}`);
});
