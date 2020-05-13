module.exports = {
	getAccountPage: (req, res) => {
		db.query("SELECT * FROM roles", function (err, roles) {
			if (err) throw err;

			db.query("SELECT * FROM accounts", function (err, accounts) {
				if (err) throw err;

				res.render("account", {
					user: req.user,
					title: "Account",
					accounts: accounts,
					roles: roles,
					res: res
				});
			});
		});
	},
	editAccount: (req, res) => {
		let userID = req.user.id;
		let compartiment = req.body.compartiment;
		let instagram = req.body.instagram;
		let post = req.body.post;

		let query;

		if (userID && instagram)
			query =
				"UPDATE `accounts` SET `Compartiment` = '" +
				compartiment +
				"', `Role` = '" +
				post +
				"', `Instagram` = 'https://instagram.com/" +
				instagram +
				"' WHERE User_ID = '" +
				userID +
				"';";
		else if (userID && !instagram)
			query =
				"UPDATE `accounts` SET `Compartiment` = '" +
				compartiment +
				"', `Role` = '" +
				post +
				"' WHERE User_ID = '" +
				userID +
				"';";

		if (userID) {
			db.query(query, (err, result) => {
				if (err) res.status(500).send(err);
				res.redirect("/echipa");
			});
		} else res.redirect("/echipa");
	}
};
