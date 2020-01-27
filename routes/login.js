module.exports = {
    getLoginPage: (req, res) => {

        res.render('login.ejs', {
            title: "Login",
            user: req.user
        });

    }
};
