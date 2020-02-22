function checkU(uname) {
  let username = uname;
  let regex = /^[a-z][a-z_]{4,7}/;

  let checkResult = username.match(regex);
  if (checkResult != null) {
    if (checkResult.toString() === username) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

function checkP(pass) {
  let password = pass;
  let regex = /[A-Za-z0-9!]{9}/;

  let checkResult = password.match(regex);
  if (checkResult != null) {
    if (checkResult.toString() === password) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

//check Username
console.log(checkU("mgil"));

//check Password
console.log(checkP("asd2323!!"));
