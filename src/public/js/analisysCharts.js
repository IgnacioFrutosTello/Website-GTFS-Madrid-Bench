var ctx10 = document.getElementById("totalSuccessQueriesChart").getContext('2d');
//var ctx11 = document.getElementById("numberSuccessedQueriesChart").getContext('2d');

//% of successed queries
var totalSuccessQueriesChart = new Chart(ctx10, {
    type: 'bar',
    data: {
        labels: ["SQL", "MongoDB", "CSV", "XML", "JS0N", "Minextj", "Maxextj"],
        datasets: [
            {
                label: "% Successed Queries",
                data: [
                    sucessQuerySql,
                    sucessQueryMongoDB,
                    sucessQueryCSV,
                    sucessQueryXml,
                    sucessQueryJson,
                    sucessQueryMinextj,
                    sucessQueryMaxextj
                ],
                backgroundColor: 'rgba(122, 255, 51, 0.2)',
                borderColor: 'rgba(122, 255, 51, 1)',
                borderWidth: 1
            },
            {
                label: '% Failed Queries',
                data: [failedQuerySql, failedQueryMongoDB, failedQueryCsv, failedQueryXml, failedQueryJson, failedQueryMinextj, failedQueryMaxextj],
                backgroundColor: 'rgba(255, 12, 3, 0.2)',
                borderColor: 'rgba(255, 12, 3, 1)',
                borderWidth: 1
            },
            {
                label: '% Diference Queries',
                data: [diferentQuerySql, diferentQueryMongoDB, diferentQueryCsv, diferentQueryXml, diferentQueryJson, diferentQueryMinextj, diferentQueryMaxextj],
                backgroundColor: 'rgba(249, 51, 255, 0.2)',
                borderColor: 'rgba(249, 51, 255, 1)',
                borderWidth: 1
            },
            {
                label: '% TimeOut Queries',
                data: [timeOutQuerySql, timeOutQueryMongoDB, timeOutQueryCsv, timeOutQueryXml, timeOutQueryJson, timeOutQueryMinextj, timeOutQueryMaxextj],
                backgroundColor: 'rgba(255, 165, 51, 0.2)',
                borderColor: 'rgba(255, 165, 51, 1)',
                borderWidth: 1
            },
        ]
    },
    options: {
        responsive: true,
    },
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
});

//% of all success querys for dataset
var numberSuccessedQueriesChart = new Chart(ctx11, {
    type: 'doughnut',
    labels: ["Success Query", "No Executed", "Diferent", "Time Out"],
    data: {
        label: ["Meh"],
        datasets: [
            {
                label: 'SQL Dataset',
                data: [
                    sucessQueryMRDB,
                    failedQueryMRDB,
                    diferentQueryMRDB,
                    timeOutQueryMRDB
                ],
                backgroundColor: [
                    'rgba(122, 255, 51, 0.2)',
                    'rgba(255, 12, 3, 0.2)',
                    'rgba(249, 51, 255, 0.2)',
                    'rgba(255, 165, 51, 0.2)',
                ],
                borderColor: [
                    'rgba(122, 255, 51, 1)',
                    'rgba(255, 12, 3, 1)',
                    'rgba(249, 51, 255, 1)',
                    'rgba(255, 165, 51, 1)',
                ],
                borderWidth: 1
            }
        ]
    },
    options: {
        responsive: true,
        plugins:{
            legend: {
                display: true,
                position: 'top'
            }
        }
    },
});
