/* Author: amir fahd
 * Email : efahdz7@gmail.com
 * When DOM is ready....
 */
$(document).ready(function() {

    alllock();

    /*
    $("#1st").hide();
    $("#2nd").hide();
    $("#3rd").hide();
    $("#4th").hide();
    $("#5th").hide();
    */
    
    $.step1 = "not complete";
    $.step2 = "not complete";
    $.step3 = "not complete";
    $.step4 = "not complete";
    
    //append 1st form
    $("#1st input[name=submit1]").click(function() {
        $.step1 = "done";
        if ($("#submit1") != "" && ("input[name]")!= "") {
            $("#2nd").slideDown();
            $("#2nd :input").prop("disabled", false);
        } else {
            $("#2nd").slideUp();
        }
    });

    //append 2nd form
    $("#2nd input[name=submit2]").click(function() {
        $.step2 = "done";
        if ($("#submit2") != "") {
            $("#3rd").slideDown();
            $("#3rd :input").prop("disabled", false);
        } else {
            $("#3rd").slideUp();
        }
    });

    //append 3rd form
    $("#3rd input[name=submit3]").click(function() {
        $.step3 = "done";
        if ($("#submit3") != "") {
            $("#4th").slideDown();
            $("#4th :input").prop("disabled", false);
        } else {
            $("#4th").slideUp();
        }
    });

    //append 4th form
    $("#4th input[name=submit4]").click(function() {
        $.step4 = "done";
        if ($("#submit4") != "") {
            $("#5th").slideDown();
            $("#5th :input").prop("disabled", false);
        } else {
            $("#5th").slideUp();
        }
    });

    //append 5th form
    /*
    $("#5th input[name=submit5]").click(function() {
        $.step4 = "done";
        if ($("#submit5") != "") {
            //steptwo();
        };
    });
    */

    $("*").find("#q1").load(form1());
    $("*").find("#q2").load(form2());
    $("*").find("#q3").load(form3());
    $("*").find("#q4").load(form4());
    $("*").find("#q5").load(form5());

    function alllock() {
        allqsn = $("#2nd, #3rd, #4th, #5th");
        allqsn.find(":input").each(function() {
            allqsn.hide();
            $(this).prop({
                disabled: true
            });
        }); //end allqsn
        return false;
    }; //end function

    function form1() {
        console.log('check function form1');
        var form = $('#1st');
        //1st form
        form.on('submit', function() {
            //console.log('trigger');
            var a = $(this),
                url = a.attr('action'),
                method = a.attr('method'),
                data = {};

            //retrieve all data
            a.find('[name]').each(function(index, value) {
                //console.log(value);
                var b = $(this),
                    name = b.attr('name'),
                    value = b.val();

                data[name] = value;
            });
            //console.log(data);
            //retrieving all data using ajax
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(e) {
                    console.log(e);
                    $(form).replaceWith(e);
                }
            }).done(function(data) {
                //$(form).replaceWith(data);
                //console.log(typeof data);
                //console.log('end function form1');
            });
            //$('.1st-qsn').hide();

            return false;
        }); //end 1st-form
        return false;
    }; //end function form1

    function form2() {
        console.log('check function form2');
        var form = $('#2nd');
        //1st form
        form.on('submit', function() {
            console.log('trigger2');
            var a = $(this),
                url = a.attr('action'),
                method = "POST";
            data = {};

            //$( "select option:selected" ).each(function() {
            //value = parseInt(b.val());            
            //find all data
            a.find("input[type=submit],input[type=radio]:checked").each(function() {
                var b = $(this),
                    name = b.attr('name'),
                    value = b.val();

                data[name] = value;
                //console.log(typeof val);
            }); //end find
            //console.log(typeof data);
            //console.log(data);        
            //retrieving all data using ajax
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(e) {
                    console.log('checksuccess2');
                    console.log(e);
                    form.replaceWith(e);
                }
            }).done(function(data) {
                //$(form).replaceWith(data);
                // console.log(data);
            }); //end ajax & done

            //$('.1st-qsn').hide();

            return false;
        }); //end form
        return false;
    }; //end function form2

    function form3() {
        console.log('check function form3');
        var form = $('#3rd');
        //1st form
        form.on('submit', function() {
            console.log('trigger3');
            var a = $(this),
                url = a.attr('action'),
                method = "POST";
            data = {};

            //$( "select option:selected" ).each(function() {
            //value = parseInt(b.val());            
            //find all data
            a.find("input[type=submit],input[type=radio]:checked").each(function() {
                var b = $(this),
                    name = b.attr('name'),
                    value = b.val();

                data[name] = value;
                //console.log(typeof val);
            }); //end find
            //console.log(typeof data);
            console.log(data);
            //retrieving all data using ajax
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(e) {
                    console.log('checksuccess3');
                    console.log(e);
                    form.replaceWith(e);
                }
            }).done(function(data) {
                //$(form).replaceWith(data);
                // console.log(data);
            }); //end ajax & done

            //$('.1st-qsn').hide();

            return false;
        }); //end form
        return false;
    }; //end function form3

    function form4() {
        console.log('check function form4');
        var form = $('#4th');
        //1st form
        form.on('submit', function() {
            //console.log('trigger');
            var a = $(this),
                url = a.attr('action'),
                method = a.attr('method'),
                data = {};

            //retrieve all data
            a.find('[name]').each(function(index, value) {
                //console.log(value);
                var b = $(this),
                    name = b.attr('name'),
                    value = b.val();

                data[name] = value;
            });
            //console.log(data);
            //retrieving all data using ajax
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(e) {
                    console.log(e);
                    $(form).replaceWith(e);
                }
            }).done(function(data) {
                //$(form).replaceWith(data);
                //console.log(typeof data);
                //console.log('end function form1');
            });
            //$('.1st-qsn').hide();

            return false;
        }); //end 1st-form
        return false;
    }; //end function form4

    function form5() {
        console.log('check function form5');
        var form = $('#5th');
        //1st form
        form.on('submit', function() {
            //console.log('trigger');
            var a = $(this),
                url = a.attr('action'),
                method = a.attr('method'),
                data = {};

            //retrieve all data
            a.find('[name]').each(function(index, value) {
                //console.log(value);
                var b = $(this),
                    name = b.attr('name'),
                    value = b.val();

                data[name] = value;
            });
            //console.log(data);
            //retrieving all data using ajax
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(e) {
                    console.log(e);
                    $(form).replaceWith(e);
                    steptwo();
                }
            }).done(function(data) {
                //$(form).replaceWith(data);
                //console.log(typeof data);
                //console.log('end function form1');
            });
            //$('.1st-qsn').hide();

            return false;
        }); //end 1st-form
        return false;
    }; //end function form5

}); //end global function