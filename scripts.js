window.onload = function() {
    loadData()
    alert("Page loaded!");
};

function loadData() {
    var table = document.getElementById("display-table");

    const xhr = new XMLHttpRequest();

    xhr.onload = function() {
        if (xhr.status == 200) {
            const data = JSON.parse(xhr.responseText);
            
            const colRow = document.createElement("tr");
            for (let col_names of Object.keys(data[0])) {
                const colCell = document.createElement("th");
                colCell.textContent = col_names;
                colRow.appendChild(colCell);
            };
            table.appendChild(colRow);

            for (let item of data) {
                const dataRow = document.createElement("tr");
                for (let content of Object.values(item)) {
                    const dataCell = document.createElement("td");
                    dataCell.textContent = content;
                    dataRow.appendChild(dataCell);
                }
                table.appendChild(dataRow);
            };
        };
    };

    xhr.open('GET', 'https://edric-raharjo.alwaysdata.net/api_php/datas/', true);
    xhr.send();

};
