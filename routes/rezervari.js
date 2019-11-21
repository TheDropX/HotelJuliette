module.exports = {
    getRoomPage: (req, res) => {

        let roomType = req.params.type;
            
        getRoomData(roomType, function(err, roomData) {
            if (err) console.log(err);

            res.render('camera.ejs', {
                title: "Camera",
                roomData: roomData
            });
            console.log(roomData)
        });

        function getRoomData(type, callback) {

            db.query("SELECT * FROM `camere` WHERE Type = '" + type + "' LIMIT 1;", function(err, result) {

                if (err) 
                    callback(err, null);
                else
                    callback(null, result);

            });

        }
    },
    getRoomsPage: (req, res) => {
            
        getRooms(function(err, rooms) {
            if (err) console.log(err);

            res.render('rezervari.ejs', {
                title: "Camere",
                rooms: rooms
            });
        });

        function getRooms(callback) {

            db.query("SELECT * FROM `camere` ORDER BY ID", function(err, result) {

                if (err) 
                    callback(err, null);
                else
                    callback(null, result);

            });

        }
    }
};
