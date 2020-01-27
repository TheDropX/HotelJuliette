const fetch = require('node-fetch');
const dotenv = require('dotenv');
var nodemailer = require('nodemailer');

dotenv.config();

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: process.env.EMAIL,
    pass: process.env.EMAIL_PASSWORD
  }
});


module.exports = {
    getContactPage: (req, res) => {

      res.render('contact.ejs', {
        title: "Contact"
      });

    },
    createTicket: async (req, res) => {

      let name = req.body.name;
      let email = req.body.email;
      let phoneNumber = req.body.phoneNumber;
      let message = req.body.textArea
      let recaptcha_response = req.body['g-recaptcha-response'];

      await fetch("https://www.google.com/recaptcha/api/siteverify", {
        method: 'POST',
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `secret=${process.env.RECAPTCHA_SECRET}&response=${recaptcha_response}`
      }).then((res) => { return res.json(); })
        .then(function (data) {
          if (data.success == true) {
             var mailOptions = {
              from: "Support Hotel Juliette <support@thedrop.me>",
              to: "support@thedrop.me",
              subject: `Dl./Dna. ${name} ne-a contactat!`,
              text: "",
              html: `
                <html>

                <head>
                <title></title>
                <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
                <style>
                    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

                    body {
                    font-family: 'Montserrat', sans-serif !important;
                    }

                    .info {
                    font-size: 14px;
                    line-height: 0;
                    }
                </style>
                </head>

                <body aria-readonly="false" style="font-family: 'Montserrat', sans-serif;">
                    <h2 style="padding-bottom: 25px; margin: 0; font-family: 'Montserrat', sans-serif;">Mesaj de la dl./dna. ${name}</h2>
                    <h2 style="padding-bottom: 15px; margin: 0;">Detalii:</h2>
                    <p class="info"><b>Email: ${email}</b></p>
                    <p class="info"><b>Numar de telefon: ${phoneNumber}</b></p>
                    <p class="info"><b>Mesaj: ${message}</b></p>
                    <br>
                    <h2>Nu uitati sa raspundeti!</h2>
                </body>

            </html>
            `
            };

            transporter.sendMail(mailOptions, function(error, info){
                if (error) {
                    console.log(error);

                    res.render('errors/error.ejs', {
                        title: "Error"
                    });
                } else {
                    console.log('Email sent: ' + info.response);

                    res.redirect('/');
                }
            });
          } else return;
        });
    }
};
