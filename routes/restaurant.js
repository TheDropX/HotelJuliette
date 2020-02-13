module.exports = {
    getRestaurantPage: (req, res) => {

        res.render('restaurant.ejs', {
            title: "Restaurant"
        });

    },

    getMenuPage: (req, res) => {

        db.query("SELECT * FROM prices", async function (err, data) {
            if (err) throw err;

            var categories = [];

            data.map(element => {
                if (!categories.includes(element.Category)) categories.push(element.Category);
            });

            res.render('menu.ejs', {
                title: "Meniu",
                items: data,
                categories: categories
            });

        });
    }
};