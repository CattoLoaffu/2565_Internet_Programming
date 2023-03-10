let normalSeatsSelected = 0;
let specialSeatsSelected = 0;
let allSeatsSelected = 0;
const normalSeatPrice = 160;
const specialSeatPrice = 180;
const selectedSeats = [];

function changeImage(imageId) {
   const image = document.getElementById(imageId);
   if (image.src.endsWith("chair.png")) {
     image.src = "../Assets/Booking.png";
     normalSeatsSelected++;
     allSeatsSelected++;
     selectedSeats.push(image.getAttribute("id"));
   } else {
     image.src = "../Assets/chair.png";
     normalSeatsSelected--;
     allSeatsSelected--;
     const index = selectedSeats.indexOf(image.getAttribute("id"));
     if (index > -1) {
       selectedSeats.splice(index, 1);
     }
   }
   document.getElementById("normal").textContent = normalSeatsSelected;
   document.getElementById("all-seats").textContent = allSeatsSelected;
   updatePrice();
   updateSelectedSeats();
   enableSubmitButton();
}

function changeImageSofa(imageId) {
   const image = document.getElementById(imageId);
   if (image.src.endsWith("sofa.png")) {
     image.src = "../Assets/bookingsofa.png";
     specialSeatsSelected++;
     allSeatsSelected++;
     selectedSeats.push(image.getAttribute("id"));
   } else {
     image.src = "../Assets/sofa.png";
     specialSeatsSelected--;
     allSeatsSelected--;
     const index = selectedSeats.indexOf(image.getAttribute("id"));
     if (index > -1) {
       selectedSeats.splice(index, 1);
     }
   }
   document.getElementById("sofa").textContent = specialSeatsSelected;
   document.getElementById("all-seats").textContent = allSeatsSelected;
   updatePrice();
   updateSelectedSeats();
   enableSubmitButton();
}

function updatePrice() {
   const totalPrice = normalSeatsSelected * normalSeatPrice + specialSeatsSelected * specialSeatPrice;
   document.getElementById("total-price").textContent = totalPrice;
}

function updateSelectedSeats() {
  const selectedSeatsDiv = document.getElementById("selectedSeats");
  const selectedSeatsInput = document.getElementById("selectedSeatsInput");
  selectedSeatsDiv.innerHTML = "";
  selectedSeatsInput.value = selectedSeats.join(","); // update the input field value
  for (let i = 0; i < selectedSeats.length; i++) {
    const seatNumber = selectedSeats[i];
    const seatNumberSpan = document.createElement("span");
    seatNumberSpan.textContent = seatNumber;
    selectedSeatsDiv.appendChild(seatNumberSpan);
    if (i !== selectedSeats.length - 1) {
      selectedSeatsDiv.appendChild(document.createTextNode(", "));
    }
  }
}

function checkExist(x){
  if(document.getElementById(x).src.match("../Assets/sofa.png")){
    document.getElementById(x).src = "../Assets/bookedsofa.png";
    document.getElementById(x).onclick = null;
  }else{
    document.getElementById(x).src = "../Assets/booked.png";
    document.getElementById(x).onclick = null;
  }
}