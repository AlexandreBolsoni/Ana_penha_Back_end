
function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
  }

  document.addEventListener("DOMContentLoaded", function() {
    // Esconder o conteúdo principal
    document.querySelector("main").style.display = "none";

    // Mostrar o modal
    document.getElementById("modalSheet").style.display = "block";

    // Adicionar um evento de clique ao botão de fechar do modal (botão "fechar")
    document.getElementById("fechar").addEventListener("click", function() {
        // Esconder o modal
        document.getElementById("modalSheet").style.display = "none";
        // Mostrar o conteúdo principal
        document.querySelector("main").style.display = "block";
    });

    // Adicionar um evento de clique ao botão de fechar do modal (botão "Close")
    document.getElementById("Close").addEventListener("click", function() {
        // Esconder o modal
        document.getElementById("modalSheet").style.display = "none";
        // Mostrar o conteúdo principal
        document.querySelector("main").style.display = "block";
    });
});



