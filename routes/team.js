module.exports = {
    getTeamPage: (req, res) => {
            
        getRoles(function(err, compartments) {
            if (err) console.log(err);

            getMembers(function(err, members) {
                if (err) console.log(err);

                res.render('echipa.ejs', {
                    title: "Echipă",
                    members: members,
                    compartments: compartments
                });

            });
        });

        function getMembers(callback) {

            db.query("SELECT * FROM `accounts` ORDER BY ID", function(err, result) 
            {
                if (err) 
                    callback(err, null);
                else
                    callback(null, result);

            });

        }

        function getRoles(callback) {

            db.query("SELECT * FROM `roles` ORDER BY `Order` ASC", function(err, result) {

                if (err) 
                    callback(err, null);
                else
                    callback(null, result);
                    
            });

        }
    }
};
