function redirectForm() {
    var password = prompt("Heslem je šesté slovo z malé pozvánky");
    password = password.trim().toLowerCase()
    //Change to your own Password
    if(password === 'svatební' || password === 'svatebni'){
        window.location.href = 'https://docs.google.com/forms/d/e/1FAIpQLScIzfZcf0VM-EgLUN7cI1UBeDTWeLPBEo-byTzHdG7d-O-yOg/viewform?usp=sf_link'
    } else if (password === 'stolu' || password === 'stul' || password === 'stůl') {
        window.location.href = 'https://docs.google.com/forms/d/e/1FAIpQLSeMsoE3w3nBTYMQG0An7IzGTQ2DPzYgofrsgQKoZnr2frJ-Pw/viewform?usp=sf_link'
    } else{
        alert('Nesprávné heslo')
    }
}