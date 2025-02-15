function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This function will always return false if the types of a and b are different, even if their values are the same.

function foo(a, b) {
  if (a == b) {
    return true;
  }
  return false;
}