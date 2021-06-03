//***************************************************************************************************//
//************************************************ 1 ************************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-1 Morph-RDB Warm
function updateSql1MrdbWrmChart() {
    sql1Chart.data.datasets[0].data = dataSql1MorRDBWrm;
    sql1Chart.data.datasets[1].data = dataSql1MorRDBWrmE;
    sql1Chart.data.datasets[2].data = dataSql1MorRDBWrmW;
    sql1Chart.data.datasets[3].data = dataSql1MorRDBWrmTO;
    sql1Chart.update();
}

//GTFS-SQL-1 Morph-RDB Cold
function updateSql1MrdbCldChart() {
    sql1Chart.data.datasets[0].data = dataSql1MorRDBCld;
    sql1Chart.data.datasets[1].data = dataSql1MorRDBCldE;
    sql1Chart.data.datasets[2].data = dataSql1MorRDBCldW;
    sql1Chart.data.datasets[3].data = dataSql1MorRDBCldTO;
    sql1Chart.update();
}

//GTFS-SQL-1 Ontario Cold
function updateSql1OntarioCldChart() {
    sql1Chart.data.datasets[0].data = dataSql1OntaCld;
    sql1Chart.data.datasets[1].data = dataSql1OntaCldE;
    sql1Chart.data.datasets[2].data = dataSql1OntaCldW;
    sql1Chart.data.datasets[3].data = dataSql1OntaCldTO;
    sql1Chart.update();
}

//GTFS-SQL-1 Ontop Cold
function updateSql1OntopCldChart() {
    sql1Chart.data.datasets[0].data = dataSql1OntopCld;
    sql1Chart.data.datasets[1].data = dataSql1OntopCldE;
    sql1Chart.data.datasets[2].data = dataSql1OntopCldW;
    sql1Chart.data.datasets[3].data = dataSql1OntopCldTO;
    sql1Chart.update();
}

//********************************************** MONGO **********************************************//
//GTFS-MongoDB-1 Morph-xR2RML Warm
function updateMngDb1MxR2rWrmChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb1MxR2rWrm;
    mngDb1Chart.data.datasets[1].data = dataMngDb1MxR2rWrmE;
    mngDb1Chart.data.datasets[2].data = dataMngDb1MxR2rWrmW;
    mngDb1Chart.data.datasets[3].data = dataMngDb1MxR2rWrmTO;
    mngDb1Chart.update();
}

//GTFS-MongoDB-1 Morph-xR2RML Cold
function updateMngDb1MxR2rCldChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb1MxR2rCld;
    mngDb1Chart.data.datasets[1].data = dataMngDb1MxR2rCldE;
    mngDb1Chart.data.datasets[2].data = dataMngDb1MxR2rCldW;
    mngDb1Chart.data.datasets[3].data = dataMngDb1MxR2rCldTO;
    mngDb1Chart.update();
}

//*********************************************** CSV ***********************************************//
//GTFS-CSV-1 Morph-RDB Cold
function updateCsv1MrdbCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv1MorRDBCld;
    csv1Chart.data.datasets[1].data = dataCsv1MorRDBCldE;
    csv1Chart.data.datasets[2].data = dataCsv1MorRDBCldW;
    csv1Chart.data.datasets[3].data = dataCsv1MorRDBCldTO;
    csv1Chart.update();
}

//GTFS-CSV-1 Morph-CSV Cold
function updateCsv1McsvCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv1MorCsvCld;
    csv1Chart.data.datasets[1].data = dataCsv1MorCsvCldE;
    csv1Chart.data.datasets[2].data = dataCsv1MorCsvCldW;
    csv1Chart.data.datasets[3].data = dataCsv1MorCsvCldTO;
    csv1Chart.update();
}

//GTFS-CSV-1 Ontario Cold
function updateCsv1OntarioCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv1OntaCld;
    csv1Chart.data.datasets[1].data = dataCsv1OntaCldE;
    csv1Chart.data.datasets[2].data = dataCsv1OntaCldW;
    csv1Chart.data.datasets[3].data = dataCsv1OntaCldTO;
    csv1Chart.update();
}

//*********************************************** XML ***********************************************//
//GTFS-XML-1 Ontario Cold
function updateXml1OntarioCldChart(){
    xml1Chart.data.datasets[0].data = dataXml1OntaCld;
    xml1Chart.data.datasets[1].data = dataXml1OntaCldE;  
    xml1Chart.data.datasets[2].data = dataXml1OntaCldW;
    xml1Chart.data.datasets[3].data = dataXml1OntaCldTO;
    xml1Chart.update();
}

//*********************************************** JSON **********************************************//
//GTFS-JSON-1 Ontario Cold
function updateJson1OntarioCldChart(){
    json1Chart.data.datasets[0].data = dataJson1OntaCld;
    json1Chart.data.datasets[1].data = dataJson1OntaCldE;  
    json1Chart.data.datasets[2].data = dataJson1OntaCldW;
    json1Chart.data.datasets[3].data = dataJson1OntaCldTO;
    json1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-1 Ontario Cold
function updateMinextj1OntarioCldChart(){
    minextj1Chart.data.datasets[0].data = dataMin1OntaCld;
    minextj1Chart.data.datasets[1].data = dataMin1OntaCldE;  
    minextj1Chart.data.datasets[2].data = dataMin1OntaCldW;
    minextj1Chart.data.datasets[3].data = dataMin1OntaCldTO;
    minextj1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MAXEXTJ-1 Ontario Cold
function updateMaxextj1OntarioCldChart(){
    maxextj1Chart.data.datasets[0].data = dataMax1OntaCld;
    maxextj1Chart.data.datasets[1].data = dataMax1OntaCldE;  
    maxextj1Chart.data.datasets[2].data = dataMax1OntaCldW;
    maxextj1Chart.data.datasets[3].data = dataMax1OntaCldTO;
    maxextj1Chart.update();
}

//***************************************************************************************************//
//************************************************ 5 ************************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-5 Morph-RDB Warm
function updateSql5MrdbWrmChart() {
    sql1Chart.data.datasets[0].data = dataSql5MorRDBWrm;
    sql1Chart.data.datasets[1].data = dataSql5MorRDBWrmE;
    sql1Chart.data.datasets[2].data = dataSql5MorRDBWrmW;
    sql1Chart.data.datasets[3].data = dataSql5MorRDBWrmTO;
    sql1Chart.update();
}

//GTFS-SQL-5 Morph-RDB Cold
function updateSql5MrdbCldChart() {
    sql1Chart.data.datasets[0].data = dataSql5MorRDBCld;
    sql1Chart.data.datasets[1].data = dataSql5MorRDBCldE;
    sql1Chart.data.datasets[2].data = dataSql5MorRDBCldW;
    sql1Chart.data.datasets[3].data = dataSql5MorRDBCldTO;
    sql1Chart.update();
}

//GTFS-SQL-5 Ontario Cold
function updateSql5OntarioCldChart() {
    sql1Chart.data.datasets[0].data = dataSql5OntaCld;
    sql1Chart.data.datasets[1].data = dataSql5OntaCldE;
    sql1Chart.data.datasets[2].data = dataSql5OntaCldW;
    sql1Chart.data.datasets[3].data = dataSql5OntaCldTO;
    sql1Chart.update();
}

//GTFS-SQL-5 Ontop Cold
function updateSql5OntopCldChart() {
    sql1Chart.data.datasets[0].data = dataSql5OntopCld;
    sql1Chart.data.datasets[1].data = dataSql5OntopCldE;
    sql1Chart.data.datasets[2].data = dataSql5OntopCldW;
    sql1Chart.data.datasets[3].data = dataSql5OntopCldTO;
    sql1Chart.update();
}

//********************************************** MONGO **********************************************//
//GTFS-MongoDB-5 Morph-xR2RML Warm
function updateMngDb5MxR2rWrmChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb5MxR2rWrm;
    mngDb1Chart.data.datasets[1].data = dataMngDb5MxR2rWrmE;
    mngDb1Chart.data.datasets[2].data = dataMngDb5MxR2rWrmW;
    mngDb1Chart.data.datasets[3].data = dataMngDb5MxR2rWrmTO;
    mngDb1Chart.update();
}

//GTFS-MongoDB-5 Morph-xR2RML Cold
function updateMngDb5MxR2rCldChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb5MxR2rCld;
    mngDb1Chart.data.datasets[1].data = dataMngDb5MxR2rCldE;
    mngDb1Chart.data.datasets[2].data = dataMngDb5MxR2rCldW;
    mngDb1Chart.data.datasets[3].data = dataMngDb5MxR2rCldTO;
    mngDb1Chart.update();
}

//*********************************************** CSV ***********************************************//
//GTFS-CSV-5 Morph-RDB Cold
function updateCsv5MrdbCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv5MorRDBCld;
    csv1Chart.data.datasets[1].data = dataCsv5MorRDBCldE;
    csv1Chart.data.datasets[2].data = dataCsv5MorRDBCldW;
    csv1Chart.data.datasets[3].data = dataCsv5MorRDBCldTO;
    csv1Chart.update();
}

//GTFS-CSV-5 Morph-CSV Cold
function updateCsv5McsvCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv5MorCsvCld;
    csv1Chart.data.datasets[1].data = dataCsv5MorCsvCldE;
    csv1Chart.data.datasets[2].data = dataCsv5MorCsvCldW;
    csv1Chart.data.datasets[3].data = dataCsv5MorCsvCldTO;
    csv1Chart.update();
}

//GTFS-CSV-5 Ontario Cold
function updateCsv5OntarioCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv5OntaCld;
    csv1Chart.data.datasets[1].data = dataCsv5OntaCldE;
    csv1Chart.data.datasets[2].data = dataCsv5OntaCldW;
    csv1Chart.data.datasets[3].data = dataCsv5OntaCldTO;
    csv1Chart.update();
}

//*********************************************** XML ***********************************************//
//GTFS-XML-5 Ontario Cold
function updateXml5OntarioCldChart(){
    xml1Chart.data.datasets[0].data = dataXml5OntaCld;
    xml1Chart.data.datasets[1].data = dataXml5OntaCldE;  
    xml1Chart.data.datasets[2].data = dataXml5OntaCldW;
    xml1Chart.data.datasets[3].data = dataXml5OntaCldTO;
    xml1Chart.update();
}

//*********************************************** JSON **********************************************//
//GTFS-JSON-5 Ontario Cold
function updateJson5OntarioCldChart(){
    json1Chart.data.datasets[0].data = dataJson5OntaCld;
    json1Chart.data.datasets[1].data = dataJson5OntaCldE;  
    json1Chart.data.datasets[2].data = dataJson5OntaCldW;
    json1Chart.data.datasets[3].data = dataJson5OntaCldTO;
    json1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-5 Ontario Cold
function updateMinextj5OntarioCldChart(){
    minextj1Chart.data.datasets[0].data = dataMin5OntaCld;
    minextj1Chart.data.datasets[1].data = dataMin5OntaCldE;  
    minextj1Chart.data.datasets[2].data = dataMin5OntaCldW;
    minextj1Chart.data.datasets[3].data = dataMin5OntaCldTO;
    minextj1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MAXEXTJ-5 Ontario Cold
function updateMaxextj5OntarioCldChart(){
    maxextj1Chart.data.datasets[0].data = dataMax5OntaCld;
    maxextj1Chart.data.datasets[1].data = dataMax5OntaCldE;  
    maxextj1Chart.data.datasets[2].data = dataMax5OntaCldW;
    maxextj1Chart.data.datasets[3].data = dataMax5OntaCldTO;
    maxextj1Chart.update();
}


//***************************************************************************************************//
//************************************************ 10 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-10 Morph-RDB Warm
function updateSql10MrdbWrmChart() {
    sql1Chart.data.datasets[0].data = dataSql10MorRDBWrm;
    sql1Chart.data.datasets[1].data = dataSql10MorRDBWrmE;
    sql1Chart.data.datasets[2].data = dataSql10MorRDBWrmW;
    sql1Chart.data.datasets[3].data = dataSql10MorRDBWrmTO;
    sql1Chart.update();
}

//GTFS-SQL-10 Morph-RDB Cold
function updateSql10MrdbCldChart() {
    sql1Chart.data.datasets[0].data = dataSql10MorRDBCld;
    sql1Chart.data.datasets[1].data = dataSql10MorRDBCldE;
    sql1Chart.data.datasets[2].data = dataSql10MorRDBCldW;
    sql1Chart.data.datasets[3].data = dataSql10MorRDBCldTO;
    sql1Chart.update();
}

//GTFS-SQL-10 Ontario Cold
function updateSql10OntarioCldChart() {
    sql1Chart.data.datasets[0].data = dataSql10OntaCld;
    sql1Chart.data.datasets[1].data = dataSql10OntaCldE;
    sql1Chart.data.datasets[2].data = dataSql10OntaCldW;
    sql1Chart.data.datasets[3].data = dataSql10OntaCldTO;
    sql1Chart.update();
}

//GTFS-SQL-10 Ontop Cold
function updateSql10OntopCldChart() {
    sql1Chart.data.datasets[0].data = dataSql10OntopCld;
    sql1Chart.data.datasets[1].data = dataSql10OntopCldE;
    sql1Chart.data.datasets[2].data = dataSql10OntopCldW;
    sql1Chart.data.datasets[3].data = dataSql10OntopCldTO;
    sql1Chart.update();
}

//********************************************** MONGO **********************************************//
//GTFS-MongoDB-10 Morph-xR2RML Warm
function updateMngDb10MxR2rWrmChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb10MxR2rWrm;
    mngDb1Chart.data.datasets[1].data = dataMngDb10MxR2rWrmE;
    mngDb1Chart.data.datasets[2].data = dataMngDb10MxR2rWrmW;
    mngDb1Chart.data.datasets[3].data = dataMngDb10MxR2rWrmTO;
    mngDb1Chart.update();
}

//GTFS-MongoDB-10 Morph-xR2RML Cold
function updateMngDb10MxR2rCldChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb10MxR2rCld;
    mngDb1Chart.data.datasets[1].data = dataMngDb10MxR2rCldE;
    mngDb1Chart.data.datasets[2].data = dataMngDb10MxR2rCldW;
    mngDb1Chart.data.datasets[3].data = dataMngDb10MxR2rCldTO;
    mngDb1Chart.update();
}

//*********************************************** CSV ***********************************************//
//GTFS-CSV-10 Morph-RDB Cold
function updateCsv10MrdbCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv10MorRDBCld;
    csv1Chart.data.datasets[1].data = dataCsv10MorRDBCldE;
    csv1Chart.data.datasets[2].data = dataCsv10MorRDBCldW;
    csv1Chart.data.datasets[3].data = dataCsv10MorRDBCldTO;
    csv1Chart.update();
}

//GTFS-CSV-10 Morph-CSV Cold
function updateCsv10McsvCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv10MorCsvCld;
    csv1Chart.data.datasets[1].data = dataCsv10MorCsvCldE;
    csv1Chart.data.datasets[2].data = dataCsv10MorCsvCldW;
    csv1Chart.data.datasets[3].data = dataCsv10MorCsvCldTO;
    csv1Chart.update();
}

//GTFS-CSV-10 Ontario Cold
function updateCsv10OntarioCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv10OntaCld;
    csv1Chart.data.datasets[1].data = dataCsv10OntaCldE;
    csv1Chart.data.datasets[2].data = dataCsv10OntaCldW;
    csv1Chart.data.datasets[3].data = dataCsv10OntaCldTO;
    csv1Chart.update();
}

//*********************************************** XML ***********************************************//
//GTFS-XML-10 Ontario Cold
function updateXml10OntarioCldChart(){
    xml1Chart.data.datasets[0].data = dataXml10OntaCld;
    xml1Chart.data.datasets[1].data = dataXml10OntaCldE;  
    xml1Chart.data.datasets[2].data = dataXml10OntaCldW;
    xml1Chart.data.datasets[3].data = dataXml10OntaCldTO;
    xml1Chart.update();
}

//*********************************************** JSON **********************************************//
//GTFS-JSON-10 Ontario Cold
function updateJson10OntarioCldChart(){
    json1Chart.data.datasets[0].data = dataJson10OntaCld;
    json1Chart.data.datasets[1].data = dataJson10OntaCldE;  
    json1Chart.data.datasets[2].data = dataJson10OntaCldW;
    json1Chart.data.datasets[3].data = dataJson10OntaCldTO;
    json1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-10 Ontario Cold
function updateMinextj10OntarioCldChart(){
    minextj1Chart.data.datasets[0].data = dataMin10OntaCld;
    minextj1Chart.data.datasets[1].data = dataMin10OntaCldE;  
    minextj1Chart.data.datasets[2].data = dataMin10OntaCldW;
    minextj1Chart.data.datasets[3].data = dataMin10OntaCldTO;
    minextj1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MAXEXTJ-10 Ontario Cold
function updateMaxextj10OntarioCldChart(){
    maxextj1Chart.data.datasets[0].data = dataMax10OntaCld;
    maxextj1Chart.data.datasets[1].data = dataMax10OntaCldE;  
    maxextj1Chart.data.datasets[2].data = dataMax10OntaCldW;
    maxextj1Chart.data.datasets[3].data = dataMax10OntaCldTO;
    maxextj1Chart.update();
}


//***************************************************************************************************//
//************************************************ 50 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-50 Morph-RDB Warm
function updateSql50MrdbWrmChart() {
    sql1Chart.data.datasets[0].data = dataSql50MorRDBWrm;
    sql1Chart.data.datasets[1].data = dataSql50MorRDBWrmE;
    sql1Chart.data.datasets[2].data = dataSql50MorRDBWrmW;
    sql1Chart.data.datasets[3].data = dataSql50MorRDBWrmTO;
    sql1Chart.update();
}

//GTFS-SQL-50 Morph-RDB Cold
function updateSql50MrdbCldChart() {
    sql1Chart.data.datasets[0].data = dataSql50MorRDBCld;
    sql1Chart.data.datasets[1].data = dataSql50MorRDBCldE;
    sql1Chart.data.datasets[2].data = dataSql50MorRDBCldW;
    sql1Chart.data.datasets[3].data = dataSql50MorRDBCldTO;
    sql1Chart.update();
}

//GTFS-SQL-50 Ontario Cold
function updateSql50OntarioCldChart() {
    sql1Chart.data.datasets[0].data = dataSql50OntaCld;
    sql1Chart.data.datasets[1].data = dataSql50OntaCldE;
    sql1Chart.data.datasets[2].data = dataSql50OntaCldW;
    sql1Chart.data.datasets[3].data = dataSql50OntaCldTO;
    sql1Chart.update();
}

//GTFS-SQL-50 Ontop Cold
function updateSql50OntopCldChart() {
    sql1Chart.data.datasets[0].data = dataSql50OntopCld;
    sql1Chart.data.datasets[1].data = dataSql50OntopCldE;
    sql1Chart.data.datasets[2].data = dataSql50OntopCldW;
    sql1Chart.data.datasets[3].data = dataSql50OntopCldTO;
    sql1Chart.update();
}

//********************************************** MONGO **********************************************//
//GTFS-MongoDB-50 Morph-xR2RML Warm
function updateMngDb50MxR2rWrmChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb50MxR2rWrm;
    mngDb1Chart.data.datasets[1].data = dataMngDb50MxR2rWrmE;
    mngDb1Chart.data.datasets[2].data = dataMngDb50MxR2rWrmW;
    mngDb1Chart.data.datasets[3].data = dataMngDb50MxR2rWrmTO;
    mngDb1Chart.update(); 
}

//GTFS-MongoDB-50 Morph-xR2RML Cold
function updateMngDb50MxR2rCldChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb50MxR2rCld;
    mngDb1Chart.data.datasets[1].data = dataMngDb50MxR2rCldE;
    mngDb1Chart.data.datasets[2].data = dataMngDb50MxR2rCldW;
    mngDb1Chart.data.datasets[3].data = dataMngDb50MxR2rCldTO;
    mngDb1Chart.update();
}

//*********************************************** CSV ***********************************************//
//GTFS-CSV-50 Morph-RDB Cold
function updateCsv50MrdbCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv50MorRDBCld;
    csv1Chart.data.datasets[1].data = dataCsv50MorRDBCldE;
    csv1Chart.data.datasets[2].data = dataCsv50MorRDBCldW;
    csv1Chart.data.datasets[3].data = dataCsv50MorRDBCldTO;
    csv1Chart.update();
}

//GTFS-CSV-50 Morph-CSV Cold
function updateCsv50McsvCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv50MorCsvCld;
    csv1Chart.data.datasets[1].data = dataCsv50MorCsvCldE;
    csv1Chart.data.datasets[2].data = dataCsv50MorCsvCldW;
    csv1Chart.data.datasets[3].data = dataCsv50MorCsvCldTO;
    csv1Chart.update();
}

//GTFS-CSV-50 Ontario Cold
function updateCsv50OntarioCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv50OntaCld;
    csv1Chart.data.datasets[1].data = dataCsv50OntaCldE;
    csv1Chart.data.datasets[2].data = dataCsv50OntaCldW;
    csv1Chart.data.datasets[3].data = dataCsv50OntaCldTO;
    csv1Chart.update();
}

//*********************************************** XML ***********************************************//
//GTFS-XML-50 Ontario Cold
function updateXml50OntarioCldChart(){
    xml1Chart.data.datasets[0].data = dataXml50OntaCld;
    xml1Chart.data.datasets[1].data = dataXml50OntaCldE;  
    xml1Chart.data.datasets[2].data = dataXml50OntaCldW;
    xml1Chart.data.datasets[3].data = dataXml50OntaCldTO;
    xml1Chart.update();
}

//*********************************************** JSON **********************************************//
//GTFS-JSON-50 Ontario Cold
function updateJson50OntarioCldChart(){
    json1Chart.data.datasets[0].data = dataJson50OntaCld;
    json1Chart.data.datasets[1].data = dataJson50OntaCldE;  
    json1Chart.data.datasets[2].data = dataJson50OntaCldW;
    json1Chart.data.datasets[3].data = dataJson50OntaCldTO;
    json1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-50 Ontario Cold
function updateMinextj50OntarioCldChart(){
    minextj1Chart.data.datasets[0].data = dataMin50OntaCld;
    minextj1Chart.data.datasets[1].data = dataMin50OntaCldE;  
    minextj1Chart.data.datasets[2].data = dataMin50OntaCldW;
    minextj1Chart.data.datasets[3].data = dataMin50OntaCldTO;
    minextj1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MAXEXTJ-50 Ontario Cold
function updateMaxextj50OntarioCldChart(){
    maxextj1Chart.data.datasets[0].data = dataMax50OntaCld;
    maxextj1Chart.data.datasets[1].data = dataMax50OntaCldE;  
    maxextj1Chart.data.datasets[2].data = dataMax50OntaCldW;
    maxextj1Chart.data.datasets[3].data = dataMax50OntaCldTO;
    maxextj1Chart.update();
}

//***************************************************************************************************//
//*********************************************** 100 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-100 Morph-RDB Warm
function updateSql100MrdbWrmChart() {
    sql1Chart.data.datasets[0].data = dataSql100MorRDBWrm;
    sql1Chart.data.datasets[1].data = dataSql100MorRDBWrmE;
    sql1Chart.data.datasets[2].data = dataSql100MorRDBWrmW;
    sql1Chart.data.datasets[3].data = dataSql100MorRDBWrmTO;
    sql1Chart.update();
}

//GTFS-SQL-100 Morph-RDB Cold
function updateSql100MrdbCldChart() {
    sql1Chart.data.datasets[0].data = dataSql100MorRDBCld;
    sql1Chart.data.datasets[1].data = dataSql100MorRDBCldE;
    sql1Chart.data.datasets[2].data = dataSql100MorRDBCldW;
    sql1Chart.data.datasets[3].data = dataSql100MorRDBCldTO;
    sql1Chart.update();
}

//GTFS-SQL-100 Ontario Cold
function updateSql100OntarioCldChart() {
    sql1Chart.data.datasets[0].data = dataSql100OntaCld;
    sql1Chart.data.datasets[1].data = dataSql100OntaCldE;
    sql1Chart.data.datasets[2].data = dataSql100OntaCldW;
    sql1Chart.data.datasets[3].data = dataSql100OntaCldTO;
    sql1Chart.update();
}

//GTFS-SQL-100 Ontop Cold
function updateSql100OntopCldChart() {
    sql1Chart.data.datasets[0].data = dataSql100OntopCld;
    sql1Chart.data.datasets[1].data = dataSql100OntopCldE;
    sql1Chart.data.datasets[2].data = dataSql100OntopCldW;
    sql1Chart.data.datasets[3].data = dataSql100OntopCldTO;
    sql1Chart.update();
}

//********************************************** MONGO **********************************************//
//GTFS-MongoDB-100 Morph-xR2RML Warm
function updateMngDb100MxR2rWrmChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb100MxR2rWrm;
    mngDb1Chart.data.datasets[1].data = dataMngDb100MxR2rWrmE;
    mngDb1Chart.data.datasets[2].data = dataMngDb100MxR2rWrmW;
    mngDb1Chart.data.datasets[3].data = dataMngDb100MxR2rWrmTO;
    mngDb1Chart.update(); 
}

//GTFS-MongoDB-100 Morph-xR2RML Cold
function updateMngDb100MxR2rCldChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb100MxR2rCld;
    mngDb1Chart.data.datasets[1].data = dataMngDb100MxR2rCldE;
    mngDb1Chart.data.datasets[2].data = dataMngDb100MxR2rCldW;
    mngDb1Chart.data.datasets[3].data = dataMngDb100MxR2rCldTO;
    mngDb1Chart.update();
}

//*********************************************** CSV ***********************************************//
//GTFS-CSV-100 Morph-RDB Cold
function updateCsv100MrdbCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv100MorRDBCld;
    csv1Chart.data.datasets[1].data = dataCsv100MorRDBCldE;
    csv1Chart.data.datasets[2].data = dataCsv100MorRDBCldW;
    csv1Chart.data.datasets[3].data = dataCsv100MorRDBCldTO;
    csv1Chart.update();
}

//GTFS-CSV-100 Morph-CSV Cold
function updateCsv100McsvCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv100MorCsvCld;
    csv1Chart.data.datasets[1].data = dataCsv100MorCsvCldE;
    csv1Chart.data.datasets[2].data = dataCsv100MorCsvCldW;
    csv1Chart.data.datasets[3].data = dataCsv100MorCsvCldTO;
    csv1Chart.update();
}

//GTFS-CSV-100 Ontario Cold
function updateCsv100OntarioCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv100OntaCld;
    csv1Chart.data.datasets[1].data = dataCsv100OntaCldE;
    csv1Chart.data.datasets[2].data = dataCsv100OntaCldW;
    csv1Chart.data.datasets[3].data = dataCsv100OntaCldTO;
    csv1Chart.update();
}

//*********************************************** XML ***********************************************//
//GTFS-XML-100 Ontario Cold
function updateXml100OntarioCldChart(){
    xml1Chart.data.datasets[0].data = dataXml100OntaCld;
    xml1Chart.data.datasets[1].data = dataXml100OntaCldE;  
    xml1Chart.data.datasets[2].data = dataXml100OntaCldW;
    xml1Chart.data.datasets[3].data = dataXml100OntaCldTO;
    xml1Chart.update();
}

//*********************************************** JSON **********************************************//
//GTFS-JSON-100 Ontario Cold
function updateJson100OntarioCldChart(){
    json1Chart.data.datasets[0].data = dataJson100OntaCld;
    json1Chart.data.datasets[1].data = dataJson100OntaCldE;  
    json1Chart.data.datasets[2].data = dataJson100OntaCldW;
    json1Chart.data.datasets[3].data = dataJson100OntaCldTO;
    json1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-100 Ontario Cold
function updateMinextj100OntarioCldChart(){
    minextj1Chart.data.datasets[0].data = dataMin100OntaCld;
    minextj1Chart.data.datasets[1].data = dataMin100OntaCldE;  
    minextj1Chart.data.datasets[2].data = dataMin100OntaCldW;
    minextj1Chart.data.datasets[3].data = dataMin100OntaCldTO;
    minextj1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MAXEXTJ-100 Ontario Cold
function updateMaxextj100OntarioCldChart(){
    maxextj1Chart.data.datasets[0].data = dataMax100OntaCld;
    maxextj1Chart.data.datasets[1].data = dataMax100OntaCldE;  
    maxextj1Chart.data.datasets[2].data = dataMax100OntaCldW;
    maxextj1Chart.data.datasets[3].data = dataMax100OntaCldTO;
    maxextj1Chart.update();
}

//***************************************************************************************************//
//*********************************************** 500 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-500 Morph-RDB Warm
function updateSql500MrdbWrmChart() {
    sql1Chart.data.datasets[0].data = dataSql500MorRDBWrm;
    sql1Chart.data.datasets[1].data = dataSql500MorRDBWrmE;
    sql1Chart.data.datasets[2].data = dataSql500MorRDBWrmW;
    sql1Chart.data.datasets[3].data = dataSql500MorRDBWrmTO;
    sql1Chart.update();
}

//GTFS-SQL-500 Morph-RDB Cold
function updateSql500MrdbCldChart() {
    sql1Chart.data.datasets[0].data = dataSql500MorRDBCld;
    sql1Chart.data.datasets[1].data = dataSql500MorRDBCldE;
    sql1Chart.data.datasets[2].data = dataSql500MorRDBCldW;
    sql1Chart.data.datasets[3].data = dataSql500MorRDBCldTO;
    sql1Chart.update();
}

//GTFS-SQL-500 Ontario Cold
function updateSql500OntarioCldChart() {
    sql1Chart.data.datasets[0].data = dataSql500OntaCld;
    sql1Chart.data.datasets[1].data = dataSql500OntaCldE;
    sql1Chart.data.datasets[2].data = dataSql500OntaCldW;
    sql1Chart.data.datasets[3].data = dataSql500OntaCldTO;
    sql1Chart.update();
}

//GTFS-SQL-500 Ontop Cold
function updateSql500OntopCldChart() {
    sql1Chart.data.datasets[0].data = dataSql500OntopCld;
    sql1Chart.data.datasets[1].data = dataSql500OntopCldE;
    sql1Chart.data.datasets[2].data = dataSql500OntopCldW;
    sql1Chart.data.datasets[3].data = dataSql500OntopCldTO;
    sql1Chart.update();
}

//********************************************** MONGO **********************************************//
//GTFS-MongoDB-500 Morph-xR2RML Warm
function updateMngDb500MxR2rWrmChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb500MxR2rWrm;
    mngDb1Chart.data.datasets[1].data = dataMngDb500MxR2rWrmE;
    mngDb1Chart.data.datasets[2].data = dataMngDb500MxR2rWrmW;
    mngDb1Chart.data.datasets[3].data = dataMngDb500MxR2rWrmTO;
    mngDb1Chart.update(); 
}

//GTFS-MongoDB-500 Morph-xR2RML Cold
function updateMngDb500MxR2rCldChart() {
    mngDb1Chart.data.datasets[0].data = dataMngDb500MxR2rCld;
    mngDb1Chart.data.datasets[1].data = dataMngDb500MxR2rCldE;
    mngDb1Chart.data.datasets[2].data = dataMngDb500MxR2rCldW;
    mngDb1Chart.data.datasets[3].data = dataMngDb500MxR2rCldTO;
    mngDb1Chart.update();
}

//*********************************************** CSV ***********************************************//
//GTFS-CSV-500 Morph-RDB Cold
function updateCsv500MrdbCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv500MorRDBCld;
    csv1Chart.data.datasets[1].data = dataCsv500MorRDBCldE;
    csv1Chart.data.datasets[2].data = dataCsv500MorRDBCldW;
    csv1Chart.data.datasets[3].data = dataCsv500MorRDBCldTO;
    csv1Chart.update();
}

//GTFS-CSV-500 Morph-CSV Cold
function updateCsv500McsvCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv500MorCsvCld;
    csv1Chart.data.datasets[1].data = dataCsv500MorCsvCldE;
    csv1Chart.data.datasets[2].data = dataCsv500MorCsvCldW;
    csv1Chart.data.datasets[3].data = dataCsv500MorCsvCldTO;
    csv1Chart.update();
}

//GTFS-CSV-500 Ontario Cold
function updateCsv500OntarioCldChart() {
    csv1Chart.data.datasets[0].data = dataCsv500OntaCld;
    csv1Chart.data.datasets[1].data = dataCsv500OntaCldE;
    csv1Chart.data.datasets[2].data = dataCsv500OntaCldW;
    csv1Chart.data.datasets[3].data = dataCsv500OntaCldTO;
    csv1Chart.update();
}

//*********************************************** XML ***********************************************//
//GTFS-XML-500 Ontario Cold
function updateXml500OntarioCldChart(){
    xml1Chart.data.datasets[0].data = dataXml500OntaCld;
    xml1Chart.data.datasets[1].data = dataXml500OntaCldE;  
    xml1Chart.data.datasets[2].data = dataXml500OntaCldW;
    xml1Chart.data.datasets[3].data = dataXml500OntaCldTO;
    xml1Chart.update();
}

//*********************************************** JSON **********************************************//
//GTFS-JSON-500 Ontario Cold
function updateJson500OntarioCldChart(){
    json1Chart.data.datasets[0].data = dataJson500OntaCld;
    json1Chart.data.datasets[1].data = dataJson500OntaCldE;  
    json1Chart.data.datasets[2].data = dataJson500OntaCldW;
    json1Chart.data.datasets[3].data = dataJson500OntaCldTO;
    json1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-500 Ontario Cold
function updateMinextj500OntarioCldChart(){
    minextj1Chart.data.datasets[0].data = dataMin500OntaCld;
    minextj1Chart.data.datasets[1].data = dataMin500OntaCldE;  
    minextj1Chart.data.datasets[2].data = dataMin500OntaCldW;
    minextj1Chart.data.datasets[3].data = dataMin500OntaCldTO;
    minextj1Chart.update();
}

//********************************************* MINEXTJ **********************************************//
//GTFS-MAXEXTJ-500 Ontario Cold
function updateMaxextj500OntarioCldChart(){
    maxextj1Chart.data.datasets[0].data = dataMax500OntaCld;
    maxextj1Chart.data.datasets[1].data = dataMax500OntaCldE;  
    maxextj1Chart.data.datasets[2].data = dataMax500OntaCldW;
    maxextj1Chart.data.datasets[3].data = dataMax500OntaCldTO;
    maxextj1Chart.update();
}


//***************************************************************************************************//
//*********************************************** SIZE **********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
function sqlSizeChange(y) {
    var value = y.value;
    var sqlMorphRDBWarm = document.getElementById('sqlMorphRDBWarm');
    var sqlMorphRDBCold = document.getElementById('sqlMorphRDBCold');
    var sqlOntario = document.getElementById('sqlOntario');
    var sqlOntop = document.getElementById('sqlOntop');
    var chart = document.getElementById('sql1Chart');

    if (value == 1) {
        sqlMorphRDBWarm.attributes[3].nodeValue = 'updateSql1MrdbWrmChart()';
        sqlMorphRDBCold.attributes[3].nodeValue = 'updateSql1MrdbCldChart()';
        sqlOntario.attributes[3].nodeValue = 'updateSql1OntarioCldChart()';
        sqlOntop.attributes[3].nodeValue = 'updateSql1OntopCldChart()';
        updateSql1MrdbWrmChart();
    }

    if (value == 5) {
        sqlMorphRDBWarm.attributes[3].nodeValue = 'updateSql5MrdbWrmChart()';
        sqlMorphRDBCold.attributes[3].nodeValue = 'updateSql5MrdbCldChart()';
        sqlOntario.attributes[3].nodeValue = 'updateSql5OntarioCldChart()';
        sqlOntop.attributes[3].nodeValue = 'updateSql5OntopCldChart()';
        updateSql5MrdbWrmChart();
    }

    if (value == 10) {
        sqlMorphRDBWarm.attributes[3].nodeValue = 'updateSql10MrdbWrmChart()';
        sqlMorphRDBCold.attributes[3].nodeValue = 'updateSql10MrdbCldChart()';
        sqlOntario.attributes[3].nodeValue = 'updateSql10OntarioCldChart()';
        sqlOntop.attributes[3].nodeValue = 'updateSql10OntopCldChart()';
        updateSql10MrdbWrmChart();
    }

    if (value == 50) {
        sqlMorphRDBWarm.attributes[3].nodeValue = 'updateSql50MrdbWrmChart()';
        sqlMorphRDBCold.attributes[3].nodeValue = 'updateSql50MrdbCldChart()';
        sqlOntario.attributes[3].nodeValue = 'updateSql50OntarioCldChart()';
        sqlOntop.attributes[3].nodeValue = 'updateSql50OntopCldChart()';
        updateSql50MrdbWrmChart();
    }

    if (value == 100) {
        sqlMorphRDBWarm.attributes[3].nodeValue = 'updateSql100MrdbWrmChart()';
        sqlMorphRDBCold.attributes[3].nodeValue = 'updateSql100MrdbCldChart()';
        sqlOntario.attributes[3].nodeValue = 'updateSql100OntarioCldChart()';
        sqlOntop.attributes[3].nodeValue = 'updateSql100OntopCldChart()';
        updateSql100MrdbWrmChart();
    }

    if (value == 500) {
        sqlMorphRDBWarm.attributes[3].nodeValue = 'updateSql500MrdbWrmChart()';
        sqlMorphRDBCold.attributes[3].nodeValue = 'updateSql500MrdbCldChart()';
        sqlOntario.attributes[3].nodeValue = 'updateSql500OntarioCldChart()';
        sqlOntop.attributes[3].nodeValue = 'updateSql500OntopCldChart()';
        updateSql500MrdbWrmChart();
    }
}

//********************************************** MONGO **********************************************//
function mongoDbSizeChange(y) {
    var value = y.value;
    var mongoDbMxR2rWarm = document.getElementById('mongoDbMxR2rWarm');
    var mongoDbMxR2rCold = document.getElementById('mongoDbMxR2rCold');
    var chart = document.getElementById('mngDb1Chart');

    if (value == 1) {
        mongoDbMxR2rWarm.attributes[3].nodeValue = 'updateMngDb1MxR2rWrmChart()';
        mongoDbMxR2rCold.attributes[3].nodeValue = 'updateMngDb1MxR2rCldChart()';
        updateMngDb1MxR2rWrmChart();
    }

    if (value == 5) {
        mongoDbMxR2rWarm.attributes[3].nodeValue = 'updateMngDb5MxR2rWrmChart()';
        mongoDbMxR2rCold.attributes[3].nodeValue = 'updateMngDb5MxR2rCldChart()';
        updateMngDb5MxR2rWrmChart();
    }

    if (value == 10) {
        mongoDbMxR2rWarm.attributes[3].nodeValue = 'updateMngDb10MxR2rWrmChart()';
        mongoDbMxR2rCold.attributes[3].nodeValue = 'updateMngDb10MxR2rCldChart()';
        updateMngDb10MxR2rWrmChart();
    }

    if (value == 50) {
        mongoDbMxR2rWarm.attributes[3].nodeValue = 'updateMngDb50MxR2rWrmChart()';
        mongoDbMxR2rCold.attributes[3].nodeValue = 'updateMngDb50MxR2rCldChart()';
        updateMngDb50MxR2rWrmChart();
    }

    if (value == 100) {
        mongoDbMxR2rWarm.attributes[3].nodeValue = 'updateMngDb100MxR2rWrmChart()';
        mongoDbMxR2rCold.attributes[3].nodeValue = 'updateMngDb100MxR2rCldChart()';
        updateMngDb100MxR2rWrmChart();
    }

    if (value == 500) {
        mongoDbMxR2rWarm.attributes[3].nodeValue = 'updateMngDb500MxR2rWrmChart()';
        mongoDbMxR2rCold.attributes[3].nodeValue = 'updateMngDb500MxR2rCldChart()';
        updateMngDb500MxR2rWrmChart();
    }
}

//*********************************************** CSV ***********************************************//
function csvSizeChange(y) {
    var value = y.value; 
    var csvMorphRDBCold = document.getElementById('csvMorphRDBCold');
    var csvMorphCsvCold = document.getElementById('csvMorphCsvCold');
    var csvOntario = document.getElementById('csvOntario');
    var chart = document.getElementById('csv1Chart');

    if (value == 1) {
        csvMorphRDBCold.attributes[3].nodeValue = 'updateCsv1MrdbCldChart()';
        csvMorphCsvCold.attributes[3].nodeValue = 'updateCsv1McsvCldChart()';
        csvOntario.attributes[3].nodeValue = 'updateCsv1OntarioCldChart()';
        updateCsv1MrdbCldChart();
    }

    if (value == 5) {
        csvMorphRDBCold.attributes[3].nodeValue = 'updateCsv5MrdbCldChart()';
        csvMorphCsvCold.attributes[3].nodeValue = 'updateCsv5McsvCldChart()';
        csvOntario.attributes[3].nodeValue = 'updateCsv5OntarioCldChart()';
        updateCsv5MrdbCldChart();
    }

    if (value == 10) {
        csvMorphRDBCold.attributes[3].nodeValue = 'updateCsv10MrdbCldChart()';
        csvMorphCsvCold.attributes[3].nodeValue = 'updateCsv10McsvCldChart()';
        csvOntario.attributes[3].nodeValue = 'updateCsv10OntarioCldChart()';
        updateCsv10MrdbCldChart();
    }

    if (value == 50) {
        csvMorphRDBCold.attributes[3].nodeValue = 'updateCsv50MrdbCldChart()';
        csvMorphCsvCold.attributes[3].nodeValue = 'updateCsv50McsvCldChart()';
        csvOntario.attributes[3].nodeValue = 'updateCsv50OntarioCldChart()';
        updateCsv50MrdbCldChart();
    }

    if (value == 100) {
        csvMorphRDBCold.attributes[3].nodeValue = 'updateCsv100MrdbCldChart()';
        csvMorphCsvCold.attributes[3].nodeValue = 'updateCsv100McsvCldChart()';
        csvOntario.attributes[3].nodeValue = 'updateCsv100OntarioCldChart()';
        updateCsv100MrdbCldChart();
    }

    if (value == 500) {
        csvMorphRDBCold.attributes[3].nodeValue = 'updateCsv500MrdbCldChart()';
        csvMorphCsvCold.attributes[3].nodeValue = 'updateCsv500McsvCldChart()';
        csvOntario.attributes[3].nodeValue = 'updateCsv500OntarioCldChart()';
        updateCsv500MrdbCldChart();
    }

}

//*********************************************** XML ***********************************************//
function xmlSizeChange(y) {
    var value = y.value; 
    var xmlOntario = document.getElementById('xmlOntario');
    var chart = document.getElementById('xml1Chart');

    if (value == 1) {
        updateXml1OntarioCldChart();
    }

    if (value == 5) {
        updateXml5OntarioCldChart();
    }

    if (value == 10) {
        updateXml10OntarioCldChart();
    }

    if (value == 50) {
        updateXml50OntarioCldChart();
    }

    if (value == 100) {
        updateXml100OntarioCldChart();
    }

    if (value == 500) {
        updateXml500OntarioCldChart();
    }

}

//*********************************************** JSON **********************************************//
function jsonSizeChange(y) {
    var value = y.value; 
    var jsonOntario = document.getElementById('jsonOntario');
    var chart = document.getElementById('json1Chart');

    if (value == 1) {
        updateJson1OntarioCldChart();
    }

    if (value == 5) {
        updateJson5OntarioCldChart();
    }

    if (value == 10) {
        updateJson10OntarioCldChart();
    }

    if (value == 50) {
        updateJson50OntarioCldChart();
    }

    if (value == 100) {
        updateJson100OntarioCldChart();
    }

    if (value == 500) {
        updateJson500OntarioCldChart();
    }

}

//********************************************* MINEXTJ **********************************************//
function minextjSizeChange(y) {
    var value = y.value; 
    var minextjOntario = document.getElementById('minextjOntario');
    var chart = document.getElementById('minextj1Chart');

    if (value == 1) {
        updateMinextj1OntarioCldChart();
    }

    if (value == 5) {
        updateMinextj5OntarioCldChart();
    }

    if (value == 10) {
        updateMinextj10OntarioCldChart();
    }

    if (value == 50) {
        updateMinextj50OntarioCldChart();
    }

    if (value == 100) {
        updateMinextj100OntarioCldChart();
    }

    if (value == 500) {
        updateMinextj500OntarioCldChart();
    }

}

//********************************************* MAXEXTJ **********************************************//
function maxextjSizeChange(y) {
    var value = y.value; 
    var maxextjOntario = document.getElementById('maxextjOntario');
    var chart = document.getElementById('maxextj1Chart');

    if (value == 1) {
        updateMaxextj1OntarioCldChart();
    }

    if (value == 5) {
        updateMaxextj5OntarioCldChart();
    }

    if (value == 10) {
        updateMaxextj10OntarioCldChart();
    }

    if (value == 50) {
        updateMaxextj50OntarioCldChart();
    }

    if (value == 100) {
        updateMaxextj100OntarioCldChart();
    }

    if (value == 500) {
        updateMaxextj500OntarioCldChart();
    }

}

//************************************* UPDATE DATASET **********************************************//
function toggleDisplayChart(id) {
    var btn = document.getElementById(id);
    var chart = document.getElementsByClassName(id)[0];
    var displayedChart =  document.getElementsByClassName('displayed')[0];

    var allBtns = document.getElementsByClassName('folderLook');

    for (i = 0; i < allBtns.length; i++) {
        allBtns[i].classList.remove('btnChartDisplayed');
    }
    btn.classList.add('btnChartDisplayed');
    displayedChart.classList.remove('displayed'); 
    displayedChart.classList.add('noDisplayed')
    chart.classList.remove('noDisplayed');
    chart.classList.add('displayed');
}