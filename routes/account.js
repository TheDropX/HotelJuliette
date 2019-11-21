module.exports = {
    getAccountPage: (req, res) => {

        db.query("SELECT * FROM roles", function(err, results) {
            if (err) throw err;
            res.render('account', { user: req.user, title: "Account", roles: results, res : res });
        
        });

    },
    editAccount: (req, res) => {

        let userID = req.user.id;
        let compartiment = req.body.compartiment;
        let post = req.body.post;

        if(userID) {
        
            let query = "UPDATE `accounts` SET `Compartiment` = '" + compartiment + "', `Role` = '" + post + "' WHERE User_ID = '" + userID + "';";

            db.query(query, (err, result) => {

                if (err) res.status(500).send(err);
                res.redirect('/echipa');
                
            });

        } else res.redirect('/echipa');

    }
};