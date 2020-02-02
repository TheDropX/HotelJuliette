module.exports = {
    getRestaurantPage: (req, res) => {

        res.render('restaurant.ejs', {
            title: "Restaurant"
        });

    }
};