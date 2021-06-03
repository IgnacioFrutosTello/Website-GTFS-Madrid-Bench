var ctx = document.getElementById("sql1Chart").getContext('2d');
var ctx1 = document.getElementById("mngDb1Chart").getContext('2d');
var ctx2 = document.getElementById("csv1Chart").getContext('2d');
var ctx3 = document.getElementById("xml1Chart").getContext('2d');
var ctx4 = document.getElementById("json1Chart").getContext('2d');
var ctx5 = document.getElementById("minextj1Chart").getContext('2d');
var ctx6 = document.getElementById("maxextj1Chart").getContext('2d');


//GTFS-SQL1
var sql1Chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataSql1MorRDBWrm,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataSql1MorRDBWrmE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataSql1MorRDBWrmW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataSql1MorRDBWrmTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//GTFS-MngDB-1
var mngDb1Chart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataMngDb1MxR2rWrm,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataMngDb1MxR2rWrmE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataMngDb1MxR2rWrmW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataMngDb1MxR2rWrmTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//GTFS-CSV-1
var csv1Chart = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataCsv1MorRDBCld,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataCsv1MorRDBCldE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataCsv1MorRDBCldW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataCsv1MorRDBCldTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//GTFS-XML-1
var xml1Chart = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataXml1OntaCld,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataXml1OntaCldE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataXml1OntaCldW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataXml1OntaCldTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//GTFS-JSON-1
var json1Chart = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataJson1OntaCld,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataJson1OntaCldE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataJson1OntaCldW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataJson1OntaCldTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//GTFS-MINEXTJ-1
var minextj1Chart = new Chart(ctx5, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataMin1OntaCld,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataMin1OntaCldE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataMin1OntaCldW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataMin1OntaCldTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

//GTFS-MAXEXTJ-1
var maxextj1Chart = new Chart(ctx6, {
    type: 'bar',
    data: {
        labels: ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18"],
        datasets: [
            {
                label: 'Query',
                data: dataMax1OntaCld,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'No executed query',
                data: dataMax1OntaCldE,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Diferent number results',
                data: dataMax1OntaCldW,
                backgroundColor: 'rgba(255, 215, 0, 0.2)',
                borderColor: 'rgba(255, 215, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            },
            {
                label: 'Out of time',
                data: dataMax1OntaCldTO,
                backgroundColor: 'rgba(255, 140, 0, 0.2)',
                borderColor: 'rgba(255, 140, 0, 1)',
                borderWidth: 1,
                type: 'scatter'
            }
        ]
    },
    options: {
        tooltip: {
            displayColors: false,
            mode: 'nearest',
            backgroundColor: 'rgba(54, 162, 235, 1)'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});