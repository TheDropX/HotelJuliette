var nodemailer = require("nodemailer");

var transporter = nodemailer.createTransport({
	service: "gmail",
	auth: {
		user: process.env.EMAIL,
		pass: process.env.EMAIL_PASSWORD
	}
});

module.exports = {
	getRoomPage: (req, res) => {
		let roomType = req.params.type;

		getRoomData(roomType, function (err, roomData) {
			if (err) console.log(err);

			if (roomData[0]) {
				res.render("camera.ejs", {
					title: "Camera",
					roomData: roomData
				});
			} else
				res.render("errors/404.ejs", {
					title: "Error"
				});
		});

		function getRoomData(type, callback) {
			db.query(
				"SELECT * FROM `camere` WHERE ID = '" + type + "' LIMIT 1;",
				function (err, result) {
					if (err) callback(err, null);
					else callback(null, result);
				}
			);
		}
	},
	getRoomsPage: (req, res) => {
		getRooms(function (err, rooms) {
			if (err) console.log(err);

			res.render("rezervari.ejs", {
				title: "Camere",
				rooms: rooms
			});
		});

		function getRooms(callback) {
			db.query("SELECT * FROM `camere` ORDER BY ID", function (err, result) {
				if (err) callback(err, null);
				else callback(null, result);
			});
		}
	},
	getBookingPage: (req, res) => {
		let roomType = req.params.type;

		getRoomData(roomType, function (err, roomData) {
			if (err) console.log(err);

			if (roomData[0]) {
				res.render("rezervare.ejs", {
					title: `Rezervare Camera ${roomType}`,
					roomData: roomData
				});
			} else
				res.render("errors/404.ejs", {
					title: "Error"
				});
		});

		function getRoomData(type, callback) {
			db.query(
				"SELECT * FROM `camere` WHERE ID = '" + type + "' LIMIT 1;",
				function (err, result) {
					if (err) callback(err, null);
					else callback(null, result);
				}
			);
		}
	},
	createBooking: async (req, res) => {
		//TODO: Fix navbar on this page.

		//TODO: Create verification system.

		let name = req.body.name;
		let last_name = req.body.last_name;
		let roomType = req.params.type;
		let email = req.body.email;
		let start_date = req.body.start_date;
		let end_date = req.body.end_date;
		let phoneNumber = req.body.phoneNumber;
		let adultsNumber = req.body.adultsNumber;
		let childrenNumber = req.body.childrenNumber;

		getRoomData(roomType, async function (err, roomData) {
			if (err) console.log(err);

			let query = `INSERT INTO rezervari (Name, Last_Name, RoomType, Email, Start_Date, End_Date, phoneNumber, adultsNumber, childrenNumber) VALUES ('${name}', '${last_name}', '${roomData[0].Type}', '${email}', '${start_date}', '${end_date}', '${phoneNumber}', '${adultsNumber}', '${childrenNumber}');`;

			await db.query(query, function (err, result) {
				if (err) console.log(err);

				var mailOptions = {
					from: "Rezervari Hotel Juliette <hotel@thedrop.me>",
					to: email,
					subject: `Rezervare camera ${roomData[0].Type}`,
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
                    <p class="info"><b>Tip camera: ${roomData[0].Type}</b></p>
                    <p class="info"><b>Email: ${email}</b></p>
                    <p class="info"><b>Durata rezervarii: ${start_date} - ${end_date}</b></p>
                    <p class="info"><b>Numar de telefon: ${phoneNumber}</b></p>
                    <p class="info"><b>Numar adulti: ${adultsNumber}</b></p>
                    <p class="info"><b>Numar copii: ${childrenNumber}</b></p>
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
		});

		function getRoomData(type, callback) {
			db.query(
				"SELECT * FROM `camere` WHERE ID = '" + type + "' LIMIT 1;",
				function (err, result) {
					if (err) callback(err, null);
					else callback(null, result);
				}
			);
		}
	}
};
