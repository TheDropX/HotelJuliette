let chalk = undefined;
if (process.env.NODE_ENV == "dev") chalk = require("chalk");

module.exports = {

  info(message) {
    if (process.env.NODE_ENV != "dev") return;
    console.log(`${chalk.bgBlue(chalk.white(" INFO "))} ${message}`);
  },
  success(message) {
    if (process.env.NODE_ENV != "dev") return;
    console.log(`${chalk.bgGreen(" SUCCESS ")} ${message}`);
  },

  error(message) {
    if (process.env.NODE_ENV != "dev") return;
    console.log(`${chalk.bgRed(" ERROR ")} ${message}`);
  }

}
