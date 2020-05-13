var nodemailer = require("nodemailer");

var transporter = nodemailer.createTransport({
	service: "gmail",
	auth: {
		user: process.env.EMAIL,
		pass: process.env.EMAIL_PASSWORD
	}
});

module.exports = {
	getRestaurantPage: (req, res) => {
		res.render("restaurant.ejs", {
			title: "Restaurant"
		});
	},

	getMenuPage: (req, res) => {
		db.query("SELECT * FROM prices", async function (err, data) {
			if (err) throw err;

			var categories = [];

			data.map(element => {
				if (!categories.includes(element.Category))
					categories.push(element.Category);
			});

			res.render("menu.ejs", {
				title: "Meniu",
				items: data,
				categories: categories
			});
		});
	},
	getReservationPage: (req, res) => {
		res.render("mrezervare.ejs", {
			title: `Rezervare masa`
		});
	},
	createReservation: async (req, res) => {
		let name = req.body.name;
		let last_name = req.body.last_name;
		let email = req.body.email;
		let start_date = req.body.start_date;
		let phoneNumber = req.body.phoneNumber;
		let capacity = req.body.capacity;
		let hour = req.body.hour;

		let query = `INSERT INTO tables (Name, Last_Name, Email, Date, Hour, phoneNumber, Capacity) VALUES ('${name}', '${last_name}', '${email}', '${start_date}', '${hour}', '${phoneNumber}', '${capacity}');`;

		await db.query(query, function (err, result) {
			if (err) console.log(err);

			var mailOptions = {
				from: "Rezervari Hotel Juliette <hotel@thedrop.me>",
				to: email,
				subject: `Rezervare masa`,
				text: "",
				//TODO: Fix image resizing issue.
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
                    <p style="text-align: center; height: 250px;">
                        <img src="https://i.imgur.com/QsrB9xs.png" style="max-width: 700px; max-height: 400px;" />
                    </p>
                    <h2 style="padding-bottom: 25px; margin: 0; font-family: 'Montserrat', sans-serif;">Bună ziua, dl./dna. ${name} ${last_name}</h2>
                    <h2 style="padding-bottom: 25px; margin: 0; font-family: 'Montserrat', sans-serif;">Rezervarea dvs a fost inregistrata in baza noastra de date.</h2>
                    <h2 style="padding-bottom: 15px; margin: 0;">Detalii rezervare:</h2>
                    <p class="info"><b>Nume: ${name}</b></p>
                    <p class="info"><b>Prenume: ${last_name}</b></p>
                    <p class="info"><b>Email: ${email}</b></p>
                    <p class="info"><b>Numar de telefon: ${phoneNumber}</b></p>
                    <p class="info"><b>Data: ${start_date}</b></p>
                    <p class="info"><b>Ora: ${hour}</b></p>
                    <p class="info"><b>Numar persoane: ${capacity}</b></p>
                    <br>
                    <h2>Va rugam sa confirmati rezervarea apasand pe link-ul de mai jos.</h2>
                </body>

            </html>
            `
			};

			transporter.sendMail(mailOptions, function (error, info) {
				if (error) {
					console.log(error);

					res.render("errors/error.ejs", {
						title: "Error"
					});
				} else {
					console.log("Email sent: " + info.response);

					res.redirect("/");
				}
			});
		});
	}
};
