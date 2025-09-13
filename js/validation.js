
document.addEventListener("DOMContentLoaded", () =>{
    const form = document.getElementById("contactForm");
    const erreur = document.getElementById("erreur");
    const cofirm = document.getElementById("cofirm");
    
    form.addEventListener("submit", e=>{
        let messages = [];

        const nom = document.getElementById("nom").value.trim();
        const prenom = document.getElementById("prenom").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        if(nom.length < 3){
            messages.push("Le nom est trop court")
        }
        
        if(prenom.length < 3){
            messages.push("Le prenom est trop court")
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            messages.push("Email invalide.");
        }
        
        if (messages.length > 0) {
            e.preventDefault(); // Bloque l’envoi
            erreur.textContent = messages.join(" | ");
        }
        
        });

})