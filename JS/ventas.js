//Obtener una referencia al elementos canvas del DOM
const $grafica = document.querySelector("#grafica");
//Las etiquetas son las que van en el eje X.
const etiquetas = ["Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "JUlio"]
//Podemos tener verios conuntos de datos. 
const datosVentas2021 = {
    label: "Ventas Por mes",
    data: [4000, 1222, 3120, 6002, 4221, 7492, 2345],//La data es un arreglo que debe tener la misma cantidad de valores que la etiqueta 
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde

};
new Chart($grafica, {
    type: 'line',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2021,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});