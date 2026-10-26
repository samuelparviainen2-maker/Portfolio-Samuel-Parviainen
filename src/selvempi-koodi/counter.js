let count = 0;

// display the counter
function updateCount() {
    document.getElementById("count").innerHTML = count;
}

// increase the counter
function increaseCount() {
    count++;
    updateCount();
}

// decrease the counter
function decreaseCount() {
    count--;
    updateCount();
}

// reset the counter
function resetCount() {
    count = 0;
    updateCount();
}