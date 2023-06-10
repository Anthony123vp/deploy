let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});


const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    let foundData = false; // Variable para verificar si se encontraron datos

    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        const found = table_data.indexOf(search_data) >= 0;
        row.classList.toggle('hide', !found);
        row.style.setProperty('--delay', found ? i / 25 + 's' : '0s');

        if (found) {
            foundData = true; // Se encontraron datos
        }
    });

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });

    if (!foundData) {
        const noDataRow = document.createElement('tr');
        const noDataCell = document.createElement('td');
        noDataCell.setAttribute('colspan', table_headings.length);
        noDataCell.textContent = 'No se encontraron datos';
        noDataRow.appendChild(noDataCell);
        customers_table.appendChild(noDataRow);
    } else {
        const noDataRows = customers_table.querySelectorAll('tbody tr.no-data');
        noDataRows.forEach(row => row.remove());
    }
}


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

// 3. Converting HTML table to PDF

document.getElementById('toPDF').addEventListener('click', function() {
    const table = document.querySelector('table');
    const pdf = new jsPDF();

    // Establecer opciones de formato y estilo
    const options = {
        theme: 'grid',
        styles: {
            fontSize: 10,
            cellPadding: 4,
            halign: 'left',
            valign: 'middle',
        },
        columnStyles: {
            0: { cellWidth: 10 },
            1: { cellWidth: 40 },
            2: { cellWidth: 40 },
            // Ajusta las anchuras de las columnas según sea necesario
        },
    };

    // Generar el contenido del PDF a partir de la tabla
    pdf.autoTable(options, table);

    // Descargar el PDF
    pdf.save('table.pdf');
});


  // Descargar tabla como Excel
  document.getElementById('toEXCEL').addEventListener('click', function() {
    const table = document.querySelector('table');
    const workbook = XLSX.utils.table_to_book(table);

    // Convertir el libro de trabajo en un archivo de Excel
    const excelData = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

    // Crear el archivo blob para la descarga
    const blob = new Blob([excelData], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

    // Crear un enlace temporal para la descarga
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    link.download = 'table.xlsx';

    // Simular el clic en el enlace para iniciar la descarga
    link.click();

    // Liberar el objeto URL.createObjectURL
    URL.revokeObjectURL(url);
});