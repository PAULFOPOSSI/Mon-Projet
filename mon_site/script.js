document.getElementById("btnNewEntry").addEventListener("click", function() {
    document.getElementById("entryForm").classList.remove("hidden");
});

function hideForm() {
    document.getElementById("entryForm").classList.add("hidden");
}

function saveEntry() {
    let codeFacture = document.getElementById("codeFacture").value;
    let date = document.getElementById("date").value;
    let nomFournisseur = document.getElementById("nomFournisseur").value;
    let telFournisseur = document.getElementById("telFournisseur").value;
    let libelleOp = document.getElementById("libelleOp").value;
    let nomProduit = document.getElementById("nomProduit").value;
    let qteEntree = document.getElementById("qteEntree").value;
    let caracteristiques = document.getElementById("caracteristiques").value;

    let newRow = document.createElement("tr");
    newRow.innerHTML = `
        <td>${codeFacture}</td>
        <td>${date}</td>
        <td>${nomFournisseur}</td>
        <td>${telFournisseur}</td>
        <td>${libelleOp}</td>
        <td>${nomProduit}</td>
        <td>${qteEntree}</td>
        <td>${caracteristiques}</td>
        <td>
            <button onclick="editEntry(this)">✏</button>
            <button onclick="deleteEntry(this)">🗑</button>
            <button onclick="showDetails(this)">📄</button>
        </td>
    `;

    document.getElementById("productList").appendChild(newRow);
    hideForm();
}

function deleteEntry(button) {
    if (confirm("Voulez-vous vraiment supprimer cette opération ?")) {
        button.parentElement.parentElement.remove();
    }
}

function showDetails(button) {
    let row = button.parentElement.parentElement;
    let detailsContent = `
        <strong>Code Facture:</strong> ${row.cells[0].innerText}<br>
        <strong>Date:</strong> ${row.cells[1].innerText}<br>
        <strong>Nom Fournisseur:</strong> ${row.cells[2].innerText}<br>
        <strong>Tél Fournisseur:</strong> ${row.cells[3].innerText}<br>
        <strong>Nom Produit:</strong> ${row.cells[5].innerText}<br>
        <strong>Quantité:</strong> ${row.cells[6].innerText}<br>
        <strong>Caractéristiques:</strong> ${row.cells[7].innerText}<br>
    `;
    document.getElementById("detailsContent").innerHTML = detailsContent;
    document.getElementById("productDetails").classList.remove("hidden");
}

function printDetails() {
    let content = document.getElementById("detailsContent").innerHTML;
    let printWindow = window.open("", "", "width=600,height=400");
    printWindow.document.write(content);
    printWindow.document.close();
    printWindow.print();
}