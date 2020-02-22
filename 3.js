function arkademy(n) {
  for (i = 1; i <= n; i++) {
    if (i % 3 == 0 && i % 7 == 0) {
      console.log("Arkademy");
    } else if (i % 3 == 0) {
      console.log("Arka");
    } else if (i % 7 == 0) {
      console.log("Demy");
    } else {
      console.log(i);
    }
  }
}

arkademy(21);
