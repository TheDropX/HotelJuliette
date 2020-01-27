const chalk = require("chalk");

module.exports = {

  info(message) {
    console.log(`${chalk.bgBlue(chalk.white(" INFO "))} ${message}`);
  },
  success(message) {
    console.log(`${chalk.bgGreen(" SUCCESS ")} ${message}`);
  },

  error(message) {
    console.log(`${chalk.bgRed(" ERROR ")} ${message}`);
  }

}
