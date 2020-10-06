<?php
session_start();
include 'config_hosp.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">  
      <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--cdn of semantic ui-->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
       
        <!--cdn for animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="multidatespicker.js" type="text/javascript"></script>


        <style>
        
    header, main, footer {
      padding-left: 300px;
    }
    .save{
        padding-top:25px;
    }
    
    
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;        
      }
     .nav-wrapper .header{
          margin-top:8px;
      }
 
    }
    @media  (max-width: 576px)
{
    .save{
        padding-top:0px;
    }
    

}



@media (min-width:576px) and (max-width:768px)
{
    .save{
        padding-top:0px;
    }
    


}

@media (min-width:768px) and (max-width:992px)
{
    .save{
        padding-top:25px;        
    }
    
}


@media (min-width:992px) and (max-width:1200px)
{
  
}


        
        </style>
</head>
<body>
<header>
    <nav class="top-nav" style="background-color: #5cc1e0;">
      <div class="container"><a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger full hide-on-large-only"><i class="material-icons">menu</i></a></div>
        <div class="container">
          <div class="nav-wrapper">
            <div class="row">
              <div class="col s12 m10 offset-m1 ">
                <h1 class="header" Style="font-size:25px"><i class="far fa-check-circle"></i> Configure Slot</h1>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
<?php include 'side_nav.php';?>
    <main>
    <div class="container">
    <div class="card" >
  
  <div class="card-body edit">    
    <form>
  <div class="row ">
  <div class="form-group col-md-6 col-12 col-sm-12">
    <label for="dept">SELECT DEPATRMENT <span style="color:red">*</span></label>
    <select class="form-control" id="dept" name="dept" >
       
    <?php 
                 
      $dept = "SELECT * FROM hosp_dept WHERE choose_hosp_id=$id AND enable='yes'";
      $result3 = mysqli_query($conn,$dept);   
      if (mysqli_num_rows($result3) > 0) {        
      while($row3 = mysqli_fetch_assoc($result3)) {
                  ?>

            <option value="<?php echo $row3['dept'];?>" onclick="id(<?php echo $row3['dept'];?>)"><?php echo $row3['dept'];?></option>
                  <?php
      }
    }
    else
    {    
        echo "<option value='select department' readonly='readonly'>--No Department Selected--</option>";
    }
                    
    ?>           
    </select>
  </div>
  
  </form>
  </div>
  </div>
</div>
</div>
<div class="container">
<div class="card">
  <div class="card-header text-white" style="background-color: #5cc1e0;">
  <i class="far fa-hand-point-down"></i> Enter Departments Slot
  </div>
  <div class="card-body">
    <div >
    <form method="post">
    <div class="slot"></div>
        <input type="text" id="selectedValues" class="date-values" name="selectedValues" placeholder="Please Select The Dates: MM/DD/YYYY" readonly/>
        </form>
       
        <div id="parent" class="container" style="display:none;">
            <div class="row header-row">
                <div class="col-xs previous">
                    <a href="#" id="previous" onclick="previous()">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="card-header month-selected col-sm" id="monthAndYear">
                </div>
                <div class="col-sm">
                    <select class="form-control col-xs-6" name="month" id="month" onchange="change()"></select>
                </div>
                <div class="col-sm">
                    <select class="form-control col-xs-6" name="year" id="year" onchange="change()"></select>
                </div>
                <div class="col-xs next">
                    <a href="#" id="next" onclick="next()">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            
            <table id="calendar">
                <thead>
                    <tr>
                        <th>S</th>
                        <th>M</th>
                        <th>T</th>
                        <th>W</th>
                        <th>T</th>
                        <th>F</th>
                        <th>S</th>
                    </tr>
                </thead>
                <tbody id="calendarBody" ></tbody>
            </table>
            
        </div>
        <div class="id" id="id" style="display:none;">
            <?php echo $id; ?>
        </div>        
        <div class="btn" style="background-color: #5cc1e0;" id="save" name="save">SAVE</div>
    </div>

	<script>
	
	﻿// anonymous function to wrap around your function to avoid conflict
var s="";
    $("#save").hide();
    var x = document.getElementById("selectedValues"); 
var $dropBox = $('#parent');       
x.onclick = function () { $dropBox.show();   $("#save").hide();  };

﻿var today = new Date();
var currentMonth = today.getMonth();
var currentYear = today.getFullYear();
var selectYear = document.getElementById("year");
var selectMonth = document.getElementById("month");

var months = [];
var selectedDates = [];
var years = [];

// parameters to be set for the datepicker to run accordingly
var minYear = currentYear;
var maxYear = currentYear;
var startMonth = 0;
var endMonth = 11;
var highlightToday = true;
var dateSeparator = ', ';

// constants that would be used in the script
const dictionaryMonth =
    [
        ["Jan", 0],
        ["Feb", 1],
        ["Mar", 2],
        ["Apr", 3],
        ["May", 4],
        ["Jun", 5],
        ["Jul", 6],
        ["Aug", 7],
        ["Sep", 8],
        ["Oct", 9],
        ["Nov", 10],
        ["Dec", 11]
    ];

//this class will add a background to the selected date
const highlightClass = 'blue';
$(document).ready(function (e) {
    today = new Date();
    currentMonth = today.getMonth();
    currentYear = today.getFullYear();
    selectYear = document.getElementById("year");
    selectMonth = document.getElementById("month");
    loadControl(currentMonth, currentYear);
});

function next() {
    currentYear = currentMonth === 11 ? currentYear + 1 : currentYear;
    currentMonth = currentMonth + 1 % 12;
    loadControl(currentMonth, currentYear);
}

function previous() {
    currentYear = currentMonth === 0 ? currentYear - 1 : currentYear;
    currentMonth = currentMonth === 0 ? 11 : currentMonth - 1;
    loadControl(currentMonth, currentYear);
}

function change() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    loadControl(currentMonth, currentYear);
}


function loadControl(month, year) {
    
    addMonths(month);
    addYears(year);

    let firstDay = (new Date(year, month)).getDay();

     // body of the calendar
    var tbl = document.querySelector("#calendarBody");
    // clearing all previous cells
    tbl.innerHTML = "";
	tbl.style.cursor="pointer";


    var monthAndYear = document.getElementById("monthAndYear");
    // filing data about month and in the page via DOM.
    monthAndYear.innerHTML = months[month] + " " + year;


    selectYear.value = year;
    selectMonth.value = month;
    
    // creating the date cells here
    let date = 1;

    // add the selected dates here to preselect
    //selectedDates.push((month + 1).toString() + '/' + date.toString() + '/' + year.toString());

    // there will be maximum 6 rows for any month
    for (let rowIterator = 0; rowIterator < 6; rowIterator++) {

        // creates a new table row and adds it to the table body
        let row = document.createElement("tr");

        //creating individual cells, filing them up with data.
        for (let cellIterated = 0; cellIterated < 7 && date <= daysInMonth(month, year); cellIterated++) {

            // create a table data cell
            cell = document.createElement("td");
            let textNode = "";

            // check if this is the valid date for the month
            if (rowIterator !== 0 || cellIterated >= firstDay) {
                cell.id = (month + 1).toString() + '/' + date.toString() + '/' + year.toString();
                cell.class = "clickable";
                textNode = date;

                // this means that highlightToday is set to true and the date being iterated it todays date,
                // in such a scenario we will give it a background color
                if (highlightToday
                    && date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.style.color="red";
                }

                // set the previous dates to be selected
                // if the selectedDates array has the dates, it means they were selected earlier. 
                // add the background to it.
                if (selectedDates.indexOf((month + 1).toString() + '/' + date.toString() + '/' + year.toString()) >= 0) {
                    cell.classList.add(highlightClass);
                }

                date++;
            }

            cellText = document.createTextNode(textNode);
            cell.appendChild(cellText);
            row.appendChild(cell);
        }

        tbl.appendChild(row); // appending each row into calendar body.
    }

    // this adds the button panel at the bottom of the calendar
    addButtonPanel(tbl);

    // function when the date cells are clicked
    $("#calendarBody tr td").click(function (e) {
        var id = $(this).attr('id');
        // check the if cell clicked has a date
        // those with an id, have the date
        if (typeof id !== typeof undefined) {
            var classes = $(this).attr('class');
            if (typeof classes === typeof undefined || !classes.includes(highlightClass)) {
                var selectedDate = new Date(id);
                selectedDates.push((selectedDate.getMonth() + 1).toString() + '/' + selectedDate.getDate().toString() + '/' + selectedDate.getFullYear());
            }
            else {
                var index = selectedDates.indexOf(id);
                if (index > -1) {
                    selectedDates.splice(index, 1);
                }
            }

            $(this).toggleClass(highlightClass);
        }

        // sort the selected dates array based on the latest date first
        var sortedArray = selectedDates.sort((a, b) => {
            return new Date(a) - new Date(b);
        });

        // update the selectedValues text input
        document.getElementById('selectedValues').value = datesToString(sortedArray);
        var v=document.getElementById('selectedValues').value;
        <?php  ?>
        
        
    });

   
    
 
}

   var $dropBox = $('#parent');    
    $dropBox.show();
  
// check how many days in a month code from https://dzone.com/articles/determining-number-days-month
function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}

// adds the months to the dropdown
function addMonths(selectedMonth) {
    var select = document.getElementById("month");

    if (months.length > 0) {
        return;
    }

    for (var month = startMonth; month <= endMonth; month++) {
        var monthInstance = dictionaryMonth[month];
        months.push(monthInstance[0]);
        select.options[select.options.length] = new Option(monthInstance[0], monthInstance[1], parseInt(monthInstance[1]) === parseInt(selectedMonth));
    }
}

// adds the years to the selection dropdown
// by default it is from 1990 to 2030
function addYears(selectedYear) {

    if (years.length > 0) {
        return;
    }

    var select = document.getElementById("year");

    for (var year = minYear; year <= maxYear; year++) {
        years.push(year);
        select.options[select.options.length] = new Option(year, year, parseInt(year) === parseInt(selectedYear));
    }
}

resetCalendar = function resetCalendar() {
    // reset all the selected dates
    selectedDates = [];
    $('#calendarBody tr').each(function () {
        $(this).find('td').each(function () {
            // $(this) will be the current cell
            $(this).removeClass(highlightClass);
        });
    });
};

function datesToString(dates) {
    return dates.join(dateSeparator);
}

function endSelection() {
    $('#parent').hide();
}

    
  
// to add the button panel at the bottom of the calendar
function addButtonPanel(tbl) {
   
    // after we have looped for all the days and the calendar is complete,
    // we will add a panel that will show the buttons, reset and done
    let row = document.createElement("tr");
    row.className = 'buttonPanel';
    cell = document.createElement("td");
    cell.colSpan = 7;
    var parentDiv = document.createElement("div");
    parentDiv.classList.add('row');
    parentDiv.classList.add('buttonPanel-row');
    

    var div = document.createElement("div");
    div.className = 'col-sm';
    var resetButton = document.createElement("button");
    resetButton.className = 'btn';
	resetButton.style.backgroundColor="#5cc1e0";
    resetButton.value = 'Reset';
    resetButton.onclick = function () { resetCalendar(); };
    var resetButtonText = document.createTextNode("Reset");
    resetButton.appendChild(resetButtonText);

    div.appendChild(resetButton);
    parentDiv.appendChild(div);
   

    var div2 = document.createElement("div");
    div2.className = 'col-sm';
    var doneButton = document.createElement("button");
    doneButton.className = 'btn';
	doneButton.style.backgroundColor="#5cc1e0";
    doneButton.value = 'Done';
    doneButton.onclick = function () { endSelection(); $("#save").show();};
     
    var doneButtonText = document.createTextNode("Done");
    doneButton.appendChild(doneButtonText);
	
    div2.appendChild(doneButton);
    parentDiv.appendChild(div2);

    cell.appendChild(parentDiv);
    row.appendChild(cell);
    // appending each row into calendar body.
    tbl.appendChild(row);
}

       

	</script>

  </div>

  </div>
  </div>
</div>
</div>

    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--cdn of javascript for semantic ui--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
    
    <script src="main.js"></script>
    <script>

    document.getElementById("save").addEventListener("click", myFunction);
    
function myFunction() {
    var dept = $("#dept").find("option:selected").text();
    var id =document.getElementById("id").innerHTML;
    var date = $("#selectedValues")[0].value;
    if(date != ""){
    console.log(date);      
    console.log(id);
    var input = {
        "dept": dept,
        "id" : id,
        "date" : date
      };
    
    $.ajax({
      type: "POST",
      url: "slot_calender.php", 
      data: input,                     
      success: function(response){
        $(".slot").html("<div class='alert alert-success' role='alert'>Successfully updated.</div>").delay(3000).fadeOut(500);;
      }
      
  });
}
else
{
    $(".slot").html("<div class='alert alert-danger' role='alert'>Please Select The Dates.</div>").delay(5000).fadeOut(500);;
}
}


    </script>
</body>
</html>