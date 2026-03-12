<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jobs - Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship</title>
    <?php include('include/headerlinks.php') ?>
    <?php include('include/headerlinks.php') ?>
    <?php include('include/headerlinks.php') ?>
    <?php include('include/headerlinks.php') ?>
</head>
<body>
<?php include('include/header.php') ?>

<div class="container mb-10">
    <div class="accordion" id="accordionExample">

        <!-- @{
            int sr = 0;
            String strShowClass = "show";
            String strHideClass = "Hide";
        }
        @foreach (var item in Model)
        {
            {
                sr++;
            } -->
            <!-- foreach loop start -->

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <!-- <h4>@sr. @item.Title</h4> -->
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <span class="justify-content-end" type="button" data-toggle="collapse" onclick="hideShow('collapse1_@sr')" data-target="#collapse_@sr" aria-expanded="true" aria-controls="collapse_@sr">
                                <h5>
                                    <button class="btn btn-primary text-white text12" id="collapse1_@sr">
                                        <!-- @if (sr == 1)
                                        {@Html.Raw(strHideClass);
                                    }
                                    else
                                    {@Html.Raw(strShowClass);
                                } -->
                                    </button>
                                </h5>
                            </span>
                        </div>
                    </div>

                </div>
                <div id="collapse_@sr" class="collapse collapse1 collapse1_@sr @if(sr==1){ @Html.Raw(strShowClass); } " aria-labelledby="collapse_@sr" @*data-parent="#accordionExample"*@>
                    <div class="card-body">
                        <div class="row " style="font-size:22px">
                            <div><b class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-justify">Job Profile : </b></div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 text-justify">@item.JobProfile</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Location : </b>@item.Location</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Salary : </b>@item.Salary</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Skills : </b>@item.Skills</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Experience : </b>@item.Experience</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Eligibility : </b>@item.Eligibility</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Description : </b>@item.Description</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12 text-justify text-size"><b>Posted Date : </b>@item.Date.ToShortDateString()</div>
                        </div>
                        <div class="row justify-content-end">
                            <a href="#form" class="btn btn-primary"><i class="fa fa-pen"></i>Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>

            </div>

        <!-- }foreach loop end -->
    </div>
</div>




    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>
</html>
