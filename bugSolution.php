function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This function uses strict comparison (===) and correctly handles different types.
//It will only return true if a and b are of the same type and have the same value.