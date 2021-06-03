//***************************************************************************************************//
//************************************************ 1 ************************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-1 Morph-RDB Warm
dataSql1MorRDBWrm = [5.85, 2.07, NaN, 1.82, NaN, 1.86, 1.97, NaN, 26.02, 1.80, NaN, 1.81, 2.06, NaN, 1.89, NaN, 2.11, NaN];
dataSql1MorRDBWrmE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql1MorRDBWrmW = [NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataSql1MorRDBWrmTO = [];

//GTFS-SQL-1 Morph-RDB Cold
dataSql1MorRDBCld = [7.14, 2.65, NaN, 2.42, NaN, 2.36, 2.43, NaN, 28.65, 2.38, NaN, 2.41, 2.69, NaN, 2.58, NaN, 2.68, NaN];
dataSql1MorRDBCldE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql1MorRDBCldW = [NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataSql1MorRDBCldTO = [];

//GTFS-SQL-1 Ontario Cold
dataSql1OntaCld = [18.02, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataSql1OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataSql1OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataSql1OntaCldTO = [NaN, NaN, 1];

//GTFS-SQL-1 Ontop Cold
dataSql1OntopCld = [8.37, 5.04, 5.18, NaN, NaN, NaN, NaN, NaN, 16.56, NaN, NaN, NaN, 5.06, NaN, 5.10, NaN, 5.00, NaN];
dataSql1OntopCldE = [NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, 1, 1, 1, NaN, NaN, NaN, NaN, NaN, 1];
dataSql1OntopCldW = [NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, NaN];
dataSql1OntopCldTO = [];

//********************************************** MONGO **********************************************//
//GTFS-MngDB-1 Morph-xR2RML Warm
dataMngDb1MxR2rWrm = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 28.67, NaN, NaN, 6.52, NaN];
dataMngDb1MxR2rWrmE = [];
dataMngDb1MxR2rWrmW = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NaN, 1, 1, NaN, 1];
dataMngDb1MxR2rWrmTO = [];

//GTFS-MngDB-1 Morph-xR2RML Cold
dataMngDb1MxR2rCld = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 28.17, NaN, NaN, 6.96, NaN];
dataMngDb1MxR2rCldE = [];
dataMngDb1MxR2rCldW = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NaN, 1, 1, NaN, 1];
dataMngDb1MxR2rCldTO = [];

//*********************************************** CSV ***********************************************//
//GTFS-CSV-1 Morph-RDB Cold
dataCsv1MorRDBCld = [6.94, 3.04, NaN, 2.78, NaN, 2.78, NaN, NaN, NaN, 2.97, NaN, 6.23, 3.97, NaN, NaN, NaN, 3.14, NaN];
dataCsv1MorRDBCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, 1];
dataCsv1MorRDBCldW = [];
dataCsv1MorRDBCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, 1];

//GTFS-CSV-1 Morph-CSV Cold
dataCsv1MorCsvCld = [15.11, 10.88, NaN, 10.72, NaN, 9.95, 10.84, NaN, 40.90, 10.70, NaN, 11.60, 11.82, NaN, NaN, NaN, 11.48, NaN];
dataCsv1MorCsvCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, NaN];
dataCsv1MorCsvCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];
dataCsv1MorCsvCldTO = [];

//GTFS-CSV-1 Ontario Cold
dataCsv1OntaCld = [NaN, NaN, 17.34, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv1OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataCsv1OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataCsv1OntaCldTO = [];

//*********************************************** XML ************************************************//
//GTFS-XML-1 Ontario Cold
dataXml1OntaCld = [];
dataXml1OntaCldE = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
dataXml1OntaCldW = [];
dataXml1OntaCldTO = [];

//*********************************************** JSON ***********************************************//
//GTFS-JSON-1 Ontario Cold
dataJson1OntaCld = [18.04, NaN, 17.14, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataJson1OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataJson1OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataJson1OntaCldTO = [];

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-1 Ontario Cold
dataMin1OntaCld = [];
dataMin1OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMin1OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMin1OntaCldTO = [];

//********************************************* MAXEXTJ **********************************************//
//GTFS-MAXEXTJ-1 Ontario Cold
dataMax1OntaCld = [NaN, NaN, 17.34];
dataMax1OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataMax1OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataMax1OntaCldTO = [];

//***************************************************************************************************//
//************************************************ 5 ************************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-5 Morph-RDB Warm
dataSql5MorRDBWrm = [12.65, 2.47, NaN, 1.89, 2.06, 1.78, 1.93, NaN, NaN, 1.74, NaN, 1.88, 2.14, 4.58, 2.88, NaN, 2.61, NaN];
dataSql5MorRDBWrmE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql5MorRDBWrmW = [];
dataSql5MorRDBWrmTO = [];

//GTFS-SQL-5 Morph-RDB Cold
dataSql5MorRDBCld = [15.14, 3.24, NaN, 2.40, 2.71, 2.34, 2.62, NaN, NaN, 2.41, NaN, 2.70, 2.82, 5.59, 3.89, NaN, 3.39, NaN];
dataSql5MorRDBCldE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql5MorRDBCldW = [];
dataSql5MorRDBCldTO = [];

//GTFS-SQL-5 Ontario Cold
dataSql5OntaCld = [117.00, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataSql5OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataSql5OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataSql5OntaCldTO = [NaN, NaN, 1];

//GTFS-SQL-5 Ontop Cold
dataSql5OntopCld = [13.87, 5.40, 5.31, NaN, NaN, NaN, NaN, NaN, 16.56, NaN, NaN, NaN, 5.24, 6.61, NaN, NaN, 5.37, NaN];
dataSql5OntopCldE = [NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, 1, 1, 1, NaN, NaN, NaN, NaN, NaN, 1];
dataSql5OntopCldW = [NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, 1, NaN, NaN];
dataSql5OntopCldTO = [];

//********************************************** MONGO **********************************************//
//GTFS-MngDB-5 Morph-xR2RML Warm
dataMngDb5MxR2rWrm = [];
dataMngDb5MxR2rWrmE = [];
dataMngDb5MxR2rWrmW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb5MxR2rWrmTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//GTFS-MngDB-5 Morph-xR2RML Cold
dataMngDb5MxR2rCld = [];
dataMngDb5MxR2rCldE = [];
dataMngDb5MxR2rCldW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb5MxR2rCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//*********************************************** CSV ***********************************************//
//GTFS-CSV-5 Morph-RDB Cold
dataCsv5MorRDBCld = [14.42, 4.38, NaN, 3.81, NaN, 3.64, NaN, NaN, NaN, 6.57, NaN, NaN, 12.45, NaN, NaN, NaN, 9.25, NaN];
dataCsv5MorRDBCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, 1];
dataCsv5MorRDBCldW = [];
dataCsv5MorRDBCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, NaN, 1];

//GTFS-CSV-5 Morph-CSV Cold
dataCsv5MorCsvCld = [43.41, NaN, NaN, 33.51, NaN, 34.44, NaN, NaN, NaN, 33.86, NaN, 36.08, 34.90, NaN, NaN, NaN, 35.26, NaN];
dataCsv5MorCsvCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, 1];
dataCsv5MorCsvCldW = [NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv5MorCsvCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];

//GTFS-CSV-5 Ontario Cold
dataCsv5OntaCld = [NaN, NaN, 18.34, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv5OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataCsv5OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataCsv5OntaCldTO = [];

//*********************************************** XML ***********************************************//
//GTFS-XML-5 Ontario Cold
dataXml5OntaCld = [];
dataXml5OntaCldE = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
dataXml5OntaCldW = [];
dataXml5OntaCldTO = [];

//*********************************************** JSON ***********************************************//
//GTFS-JSON-5 Ontario Cold
dataJson5OntaCld = [NaN, NaN, 15.66, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataJson5OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataJson5OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataJson5OntaCldTO = [];

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-5 Ontario Cold
dataMin5OntaCld = [];
dataMin5OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMin5OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMin5OntaCldTO = [];

//********************************************* MAXEXTJ **********************************************//
//GTFS-MAXEXTJ-5 Ontario Cold
dataMax5OntaCld = [NaN, NaN, 18.34];
dataMax5OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataMax5OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataMax5OntaCldTO = [];


//***************************************************************************************************//
//************************************************ 10 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-10 Morph-RDB Warm
dataSql10MorRDBWrm = [23.78, 2.88, NaN, 1.93, NaN, 1.75, 1.97, NaN, NaN, 1.85, NaN, 1.94, 2.46, 6.61, 3.46, NaN, 3.07, NaN];
dataSql10MorRDBWrmE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql10MorRDBWrmW = [NaN, NaN, NaN, NaN, 1,];
dataSql10MorRDBWrmTO = [];

//GTFS-SQL-10 Morph-RDB Cold
dataSql10MorRDBCld = [27.25, 3.72, NaN, 2.54, NaN, 2.36, 2.55, NaN, NaN, 2.38, NaN, 2.50, 3.22, 8.16, 4.48, NaN, 3.77, NaN];
dataSql10MorRDBCldE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql10MorRDBCldW = [NaN, NaN, NaN, NaN, 1,];
dataSql10MorRDBCldTO = [];

//GTFS-SQL-10 Ontario Cold
dataSql10OntaCld = [415.60, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataSql10OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataSql10OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataSql10OntaCldTO = [NaN, NaN, 1];

//GTFS-SQL-10 Ontop Cold
dataSql10OntopCld = [24.05, 5.56, 5.57, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 5.29, 7.58, NaN, NaN, 5.62, NaN];
dataSql10OntopCldE = [NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, 1, 1, 1, NaN, NaN, NaN, NaN, NaN, 1];
dataSql10OntopCldW = [NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, 1, NaN, NaN];
dataSql10OntopCldTO = [];

//********************************************** MONGO **********************************************//
//GTFS-MngDB-10 Morph-xR2RML Warm
dataMngDb10MxR2rWrm = [];
dataMngDb10MxR2rWrmE = [];
dataMngDb10MxR2rWrmW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb10MxR2rWrmTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//GTFS-MngDB-10 Morph-xR2RML Cold
dataMngDb10MxR2rCld = [];
dataMngDb10MxR2rCldE = [];
dataMngDb10MxR2rCldW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb10MxR2rCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//*********************************************** CSV ***********************************************//
//GTFS-CSV-10 Morph-RDB Cold
dataCsv10MorRDBCld = [25.90, 6.06, NaN, 5.20, NaN, 4.89, NaN, NaN, NaN, 16.06, NaN, NaN, 38.15, NaN, NaN, NaN, 38.90, NaN];
dataCsv10MorRDBCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, 1];
dataCsv10MorRDBCldW = [];
dataCsv10MorRDBCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, NaN, 1];

//GTFS-CSV-10 Morph-CSV Cold
dataCsv10MorCsvCld = [97.00, NaN, NaN, 69.39, NaN, 68.78, NaN, NaN, NaN, 69.28, NaN, 71.01, 68.79, NaN, NaN, NaN, 72.29, NaN];
dataCsv10MorCsvCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, NaN];
dataCsv10MorCsvCldW = [NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];
dataCsv10MorCsvCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];

//GTFS-CSV-10 Ontario Cold
dataCsv10OntaCld = [NaN, NaN,  19.51, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv10OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataCsv10OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataCsv10OntaCldTO = [];

//*********************************************** XML ***********************************************//
//GTFS-XML-10 Ontario Cold
dataXml10OntaCld = [];
dataXml10OntaCldE = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
dataXml10OntaCldW = [];
dataXml10OntaCldTO = [];

//*********************************************** JSON ***********************************************//
//GTFS-JSON-10 Ontario Cold
dataJson10OntaCld = [NaN, NaN, 17.21, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataJson10OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataJson10OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataJson10OntaCldTO = [];

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-10 Ontario Cold
dataMin10OntaCld = [];
dataMin10OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMin10OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMin10OntaCldTO = [];

//********************************************* MAXEXTJ **********************************************//
//GTFS-MAXEXTJ-10 Ontario Cold
dataMax10OntaCld = [NaN, NaN, 19.51];
dataMax10OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataMax10OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataMax10OntaCldTO = [];

//***************************************************************************************************//
//************************************************ 50 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-50 Morph-RDB Warm
dataSql50MorRDBWrm = [108.42, 4.91, NaN, 2.08, NaN, 1.75, 1.97, NaN, NaN, 1.89, NaN, 2.29, 3.69, 22.55, 8.27, NaN, 5.56, NaN];
dataSql50MorRDBWrmE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql50MorRDBWrmW = [NaN, NaN, NaN, NaN, 1,];
dataSql50MorRDBWrmTO = [];

//GTFS-SQL-50 Morph-RDB Cold
dataSql50MorRDBCld = [121.31, 6.01, NaN, 2.68, NaN, 2.31, 2.63, NaN, NaN, 2.59, NaN, 2.91, 4.54, 27.02, 10.00, NaN, 6.89, NaN];
dataSql50MorRDBCldE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql50MorRDBCldW = [NaN, NaN, NaN, NaN, 1,];
dataSql50MorRDBCldTO = [];

//GTFS-SQL-50 Ontario Cold
dataSql50OntaCld = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataSql50OntaCldE = [NaN, 0, NaN, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataSql50OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];
dataSql50OntaCldTO = [0, NaN, 0];

//GTFS-SQL-50 Ontop Cold
dataSql50OntopCld = [119.89, 6.92, 6.61, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 6.05, 15.69, NaN, NaN, 7.31, NaN];
dataSql50OntopCldE = [NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, 1, 1, 1, NaN, NaN, NaN, NaN, NaN, 1];
dataSql50OntopCldW = [NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, 1, NaN, NaN];
dataSql50OntopCldTO = [];

//********************************************** MONGO **********************************************//
//GTFS-MngDB-50 Morph-xR2RML Warm
dataMngDb50MxR2rWrm = [];
dataMngDb50MxR2rWrmE = [];
dataMngDb50MxR2rWrmW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb50MxR2rWrmTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//GTFS-MngDB-50 Morph-xR2RML Cold
dataMngDb50MxR2rCld = [];
dataMngDb50MxR2rCldE = [];
dataMngDb50MxR2rCldW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb50MxR2rCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//*********************************************** CSV ***********************************************//
//GTFS-CSV-50 Morph-RDB Cold
dataCsv50MorRDBCld = [128.40, 22.17, NaN, 19.85, NaN, 19.60, NaN, NaN, NaN, 351.23, NaN, NaN, 1039.29, NaN, NaN, NaN, NaN, NaN];
dataCsv50MorRDBCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, 1];
dataCsv50MorRDBCldW = [];
dataCsv50MorRDBCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN];

//GTFS-CSV-50 Morph-CSV Cold
dataCsv50MorCsvCld = [575.15, 449.54, NaN, 442.60, NaN, 436.06, NaN, NaN, NaN, 444.84, NaN, 443.12, 447.74, NaN, NaN, NaN, 443.47, NaN];
dataCsv50MorCsvCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, NaN];
dataCsv50MorCsvCldW = [NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];
dataCsv50MorCsvCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];

//GTFS-CSV-50 Ontario Cold
dataCsv50OntaCld = [NaN, NaN,  35.16, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv50OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataCsv50OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataCsv50OntaCldTO = [];

//*********************************************** XML ***********************************************//
//GTFS-XML-50 Ontario Cold
dataXml50OntaCld = [];
dataXml50OntaCldE = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
dataXml50OntaCldW = [];
dataXml50OntaCldTO = [];

//*********************************************** JSON ***********************************************//
//GTFS-JSON-50 Ontario Cold
dataJson50OntaCld = [NaN, NaN, 23.74, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataJson50OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataJson50OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataJson50OntaCldTO = [];

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-50 Ontario Cold
dataMin50OntaCld = [];
dataMin50OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMin50OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMin50OntaCldTO = [];

//********************************************* MAXEXTJ **********************************************//
//GTFS-MAXEXTJ-50 Ontario Cold
dataMax50OntaCld = [NaN, NaN, 35.16];
dataMax50OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataMax50OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataMax50OntaCldTO = [];

//***************************************************************************************************//
//*********************************************** 100 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-100 Morph-RDB Warm
dataSql100MorRDBWrm = [221.11, 7.48, NaN, 2.30, NaN, 1.75, 1.96, NaN, NaN, 1.99, NaN, 2.65, 4.68, 42.44, 15.51, NaN, 8.54, NaN];
dataSql100MorRDBWrmE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql100MorRDBWrmW = [NaN, NaN, NaN, NaN, 1,];
dataSql100MorRDBWrmTO = [];

//GTFS-SQL-100 Morph-RDB Cold
dataSql100MorRDBCld = [245.98, 8.83, NaN, 3.05, NaN, 2.33, 2.52, NaN, NaN, 2.63, NaN, 3.38, 5.76, 50.99, 19.45, NaN, 10.38, NaN];
dataSql100MorRDBCldE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql100MorRDBCldW = [NaN, NaN, NaN, NaN, 1,];
dataSql100MorRDBCldTO = [];

//GTFS-SQL-100 Ontario Cold
dataSql100OntaCld = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataSql100OntaCldE = [NaN, 0, NaN, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataSql100OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataSql100OntaCldTO = [0, NaN, 0];

//GTFS-SQL-100 Ontop Cold
dataSql100OntopCld = [1477.38, 8.87, 8.25, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 6.80, 27.18, NaN, NaN, 9.20, NaN];
dataSql100OntopCldE = [NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, 1, 1, 1, NaN, NaN, NaN, NaN, NaN, 1];
dataSql100OntopCldW = [NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, 1, NaN, NaN];
dataSql100OntopCldTO = [];

//********************************************** MONGO **********************************************//
//GTFS-MngDB-100 Morph-xR2RML Warm
dataMngDb100MxR2rWrm = [];
dataMngDb100MxR2rWrmE = [];
dataMngDb100MxR2rWrmW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb100MxR2rWrmTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//GTFS-MngDB-100 Morph-xR2RML Cold
dataMngDb100MxR2rCld = [];
dataMngDb100MxR2rCldE = [];
dataMngDb100MxR2rCldW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb100MxR2rCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//*********************************************** CSV ***********************************************//
//GTFS-CSV-100 Morph-RDB Cold
dataCsv100MorRDBCld = [NaN, 43.59, NaN, 38.52, NaN, 38.43, NaN, NaN, NaN, 1582.52, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv100MorRDBCldE = [1, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, 1];
dataCsv100MorRDBCldW = [];
dataCsv100MorRDBCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, 1, NaN, NaN, 1, 1, NaN, NaN, NaN, 1, NaN];

//GTFS-CSV-100 Morph-CSV Cold
dataCsv100MorCsvCld = [1254.19, NaN, NaN, 958.43, NaN, 933.69, NaN, NaN, NaN, 957.95, NaN, 951.53, 952.93, NaN, NaN, NaN, 947.82, NaN];
dataCsv100MorCsvCldE = [NaN, NaN, 1, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, NaN, NaN, 1, 1, 1, NaN, NaN];
dataCsv100MorCsvCldW = [NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];
dataCsv100MorCsvCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 1];

//GTFS-CSV-100 Ontario Cold
dataCsv100OntaCld = [NaN, NaN,  85.59, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataCsv100OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataCsv100OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataCsv100OntaCldTO = [];

//*********************************************** XML ***********************************************//
//GTFS-XML-100 Ontario Cold
dataXml100OntaCld = [];
dataXml100OntaCldE = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
dataXml100OntaCldW = [];
dataXml100OntaCldTO = [];

//*********************************************** JSON ***********************************************//
//GTFS-JSON-100 Ontario Cold
dataJson100OntaCld = [NaN, NaN, 33.56, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataJson100OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataJson100OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataJson100OntaCldTO = [];

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-100 Ontario Cold
dataMin100OntaCld = [];
dataMin100OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMin100OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMin100OntaCldTO = [];

//********************************************* MAXEXTJ **********************************************//
//GTFS-MAXEXTJ-100 Ontario Cold
dataMax100OntaCld = [NaN, NaN, 85.59];
dataMax100OntaCldE = [NaN, 1, NaN, 1, 1, 1, 1, NaN, 1, 1, 1, 1, 1, NaN, 1, 1, 1, 1];
dataMax100OntaCldW = [1, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 1, NaN, NaN, NaN, NaN];
dataMax100OntaCldTO = [];

//***************************************************************************************************//
//************************************************ 500 ***********************************************//
//***************************************************************************************************//

//*********************************************** SQL ***********************************************//
//GTFS-SQL-500 Morph-RDB Warm
dataSql500MorRDBWrm = [NaN, 29.85, NaN, 3.39, NaN, 1.81, 1.96, NaN, NaN, 3.19, NaN, 6.34, 13.60, 220.35, 93.72, NaN, 33.64, NaN];
dataSql500MorRDBWrmE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql500MorRDBWrmW = [NaN, NaN, NaN, NaN, 1,];
dataSql500MorRDBWrmTO = [1, NaN];

//GTFS-SQL-500 Morph-RDB Cold
dataSql500MorRDBCld = [NaN, 32.71, NaN, 3.92, NaN, 2.09, 2.30, NaN, NaN, 3.62, NaN, 6.95, 14.69, 218.00, 99.00, NaN, 35.77, NaN];
dataSql500MorRDBCldE = [NaN, NaN, 1, NaN, NaN, NaN, NaN, 1, 1, NaN, 1, NaN, NaN, NaN, NaN, 1, NaN, 1];
dataSql500MorRDBCldW = [NaN, NaN, NaN, NaN, 1,];
dataSql500MorRDBCldTO = [1, NaN];

//GTFS-SQL-500 Ontario Cold
dataSql500OntaCld = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataSql500OntaCldE = [NaN, 0, NaN, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataSql500OntaCldW = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataSql500OntaCldTO = [0, NaN, 0];

//GTFS-SQL-500 Ontop Cold
dataSql500OntopCld = [NaN, 20.93, 17.17, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 10.82, 114.59, NaN, NaN, 23.95, NaN];
dataSql500OntopCldE = [NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, 1, 1, 1, NaN, NaN, NaN, NaN, NaN, 1];
dataSql500OntopCldW = [1, NaN, NaN, NaN, 1, NaN, 1, NaN, 1, NaN, NaN, NaN, NaN, NaN, 1, 1, NaN, NaN];
dataSql500OntopCldTO = [];

//********************************************** MONGO **********************************************//
//GTFS-MngDB-500 Morph-xR2RML Warm
dataMngDb500MxR2rWrm = [];
dataMngDb500MxR2rWrmE = [];
dataMngDb500MxR2rWrmW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb500MxR2rWrmTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//GTFS-MngDB-500 Morph-xR2RML Cold
dataMngDb500MxR2rCld = [];
dataMngDb500MxR2rCldE = [];
dataMngDb500MxR2rCldW = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NaN, 0, 0, NaN, 0];
dataMngDb500MxR2rCldTO = [NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, 0, NaN];

//*********************************************** CSV ***********************************************//
//GTFS-CSV-500 Morph-RDB Cold
dataCsv500MorRDBCld = [];
dataCsv500MorRDBCldE = [0, NaN, 0, NaN, 0, NaN, NaN, 0, NaN, NaN, 0, NaN, NaN, 0, 0, 0, NaN, 0];
dataCsv500MorRDBCldW = [];
dataCsv500MorRDBCldTO = [NaN, 0, NaN, 0, NaN, 0, 0, NaN, 0, 0, NaN, 0, 0, NaN, NaN, NaN, 0, NaN];

//GTFS-CSV-500 Morph-CSV Cold
dataCsv500MorCsvCld = [];
dataCsv500MorCsvCldE = [NaN, NaN, 0, NaN, 0, NaN, NaN, 0, NaN, NaN, 0, NaN, NaN, 0, 0, 0, NaN, 0];
dataCsv500MorCsvCldW = [];
dataCsv500MorCsvCldTO = [0, 0, NaN, 0, NaN, 0, 0, NaN, 0, 0, NaN, 0, 0, NaN, NaN, NaN, 0, NaN];

//GTFS-CSV-500 Ontario Cold
dataCsv500OntaCld = [];
dataCsv500OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataCsv500OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataCsv500OntaCldTO = [];

//*********************************************** XML ***********************************************//
//GTFS-XML-500 Ontario Cold
dataXml500OntaCld = [];
dataXml500OntaCldE = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
dataXml500OntaCldW = [];
dataXml500OntaCldTO = [];

//*********************************************** JSON ***********************************************//
//GTFS-JSON-500 Ontario Cold
dataJson500OntaCld = [NaN, NaN, NaN, NaN, NaN,NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN, NaN];
dataJson500OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataJson500OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataJson500OntaCldTO = [];

//********************************************* MINEXTJ **********************************************//
//GTFS-MINEXTJ-500 Ontario Cold
dataMin500OntaCld = [];
dataMin500OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMin500OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMin500OntaCldTO = [];

//********************************************* MAXEXTJ **********************************************//
//GTFS-MAXEXTJ-500 Ontario Cold
dataMax500OntaCld = [];
dataMax500OntaCldE = [NaN, 0, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0, 0, NaN, 0, 0, 0, 0];
dataMax500OntaCldW = [0, NaN, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN, NaN, 0, NaN, NaN, NaN, NaN];
dataMax500OntaCldTO = [];