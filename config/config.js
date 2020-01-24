require('dotenv').config();

module.exports = {
    "facebook_api_key"      :     process.env.FACEBOOK_API_KEY,
    "facebook_api_secret"   :     process.env.FACEBOOK_API_SECRET,
    "callback_url"          :     process.env.NODE_ENV == 'dev' ? "https://hotel.thedrop.me/auth/facebook/callback" : "https://localhost:2608/auth/facebook/callback",
    "use_database"          :      true,
    "host"                  :     process.env.DB_HOST,
    "username"              :     process.env.DB_USER,
    "password"              :     process.env.DB_PASS,
    "database"              :     "hotel"
}