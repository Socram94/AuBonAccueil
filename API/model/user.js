const mongoose = require('mongoose');

const UserSchema = new mongoose.Schema(
    {
      firstName: {
        type: String,
        default: ""
      },
      email: {
        type: String,
        default: ""
      },
      password: {
        type: String,
        default: ""
      },
      phone: {
        type: String,
        default: ""
      },
      token: {
        type: String,
        default: ""
      },
      isAdmin: {
        type: String,
        default: "0"
      },
      lastName: {
        type: String,
        default: ""
      }
    }
  );
  const user = mongoose.model("users", UserSchema) 
  module.exports = user