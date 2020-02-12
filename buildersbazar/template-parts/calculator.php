<?php
/*Template Name: calculator*/

get_header(); ?>

<a id="contentarea" tabindex="-1"></a>
        <p class="hidden-xs">With the help of our online Reinforced concrete or RCC calculator, you can estimate the quantity of cement, sand and aggregate rquired for your RCC foundation, beam and structural design.</p>
        <div class="col-md-8"><!---- Unit Selection - Radio Buttons -->
            <div class="row">
                <div class="col-xs-10 col-sm-6 col-md-9">
                    <h3>Select Si unit:</h3>
                </div>
                <input id="qty" type="hidden" value="Feet">
                <div class="col-xs-7 col-sm-6 col-md-7 radio no-padding"><label><input class="selectunits" checked="checked" name="units" type="radio" value="Feet">feet/Inch</label></div>
                <div class="col-xs-7 col-sm-6 col-md-8 radio no-padding"><label><input class="selectunits" name="units" type="radio" value="Meters">meters/cms</label></div>
            </div>
            <!---- EOF Unit Selection - Radio Buttons --> <!--- Length Input--->
            <div class="row">
                <div class="col-xs-6 col-sm-9 col-md-6">
                    <h4>Length*:</h4>
                </div>
                <div class="col-xs-9 col-sm-6 col-md-9"><input id="in1" class="form-control customClass" title="Enter Numbers Only" maxlength="5" min="0" step="1" type="number" placeholder="feet"></div>
                <div class="col-xs-9 col-sm-6 col-md-9"><input id="inch1" class="form-control customClass" title="Enter Numbers Only" maxlength="5" min="0" step="1" type="number" placeholder="inches"></div>
            </div>
            <!--- Breadth Input -->
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h4>Breadth*:</h4>
                </div>
                <div class="col-xs-9 col-sm-6 col-md-9"><input id="in2" class="form-control customClass" title="Enter Numbers Only" maxlength="5" min="1" step="1" type="number" placeholder="feet"></div>
                <div class="col-xs-9 col-sm-6 col-md-9"><input id="inch2" class="form-control customClass" title="Enter Numbers Only" maxlength="5" min="1" step="1" type="number" placeholder="inches"></div>
            </div>
            <!--- Thickness Input -->
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h4>Thickness*:</h4>
                </div>
                <div class="col-xs-9 col-sm-6 col-md-9"><input id="in3" class="form-control customClass" title="Enter Numbers Only" maxlength="5" min="1" step="1" type="number" placeholder="feet"></div>
                <div class="col-xs-9 col-sm-6 col-md-9"><input id="inch3" class="form-control customClass" title="Enter Numbers Only" maxlength="5" min="1" step="1" type="number" placeholder="inches"></div>
            </div>
            <!--- Thickness End -->
            <div id="errorHolder">Enter required values</div>
            <div class="clearfix"></div>
            <div class="col-xs-24 col-xs-offset-9 col-sm-24 col-md-24 col-md-offset-9"><button id="reset" class="button btn-lg" title="reset" type="button">Reset</button> <button id="calculate" class="button btn-lg" title="Calculate" type="button">Calculate</button></div>
            <div class="clearfix"></div>
        </div>
        <hr class="hidden-md hidden-lg hidden-sm">
        <div class="col-md-10"><!---- Results Block Start-->
            <div id="type1" class="type">
                <div class="row">
                    <div class="col-xs-24 col-sm-6 col-md-4">
                        <h3>Results:</h3>
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-7 "><input id="in4" class="form-control" style="font-size: 17px;" readonly="readonly" type="text" placeholder="0"></div>
                    <div class="col-xs-3 col-sm-6 col-md-3 no-padding">Cubic Feet</div>
                    <div class="col-xs-9 col-sm-6 col-md-7 "><input id="in5" class="form-control" style="font-size: 17px;" readonly="readonly" type="text" placeholder="0"></div>
                    <div class="col-xs-3 col-sm-6 col-md-3 no-padding">Cubic Meters</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-6 col-md-6">
                        <h5>Select RCC Design Mix:</h5>
                    </div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" checked="checked" type="radio" value="type1">M15 (1:2:4)</label></div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" name="pccdesign" type="radio" value="type2">M20 (1:1.5:3)</label></div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" name="pccdesign" type="radio" value="type3">M25 (1:1:2)</label></div>
                    <table border="1">
                        <tbody>
                            <tr><th><strong>Material</strong></th><th><strong>Coeff/<br>Cu.M</strong></th><th><strong>Unit</strong></th><th><strong>Total Qty</strong></th></tr>
                            <tr>
                                <td>
                                    <p>Cement</p>
                                    <p><a><img src="https://media.materialtree.com/wysiwyg/Orient_Logo.jpg" alt="Orient Cement" width="75px;" height="75px;"></a></p>
                                </td>
                                <td>6.42</td>
                                <td>Bags</td>
                                <td><input id="t1" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                            <tr>
                                <td>20 mm Aggregates</td>
                                <td>30.02</td>
                                <td>Cft</td>
                                <td><input id="t2" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                            <tr style="padding-top: 5px;">
                                <td>Msand</td>
                                <td>15.19</td>
                                <td>Cft</td>
                                <td><input id="t3" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--- Type2 -->
            <div id="type2" class="type" style="display: none;">
                <div class="row">
                    <div class="col-xs-24 col-sm-6 col-md-4">
                        <h3>Results:</h3>
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-7 "><input id="in6" class="form-control" style="font-size: 17px;" readonly="readonly" type="text" placeholder="0"></div>
                    <div class="col-xs-3 col-sm-6 col-md-3 no-padding">Cubic Feet</div>
                    <div class="col-xs-9 col-sm-6 col-md-7 "><input id="in7" class="form-control" style="font-size: 17px;" readonly="readonly" type="text" placeholder="0"></div>
                    <div class="col-xs-3 col-sm-6 col-md-3 no-padding">Cubic Meters</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-6 col-md-6">
                        <h5>Select RCC Design Mix:</h5>
                    </div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" name="pccdesign" type="radio" value="type1">M15 (1:2:4)</label></div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" checked="checked" type="radio" value="type2">M20 (1:1.5:3)</label></div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" name="pccdesign" type="radio" value="type3">M25 (1:1:2)</label></div>
                    <table border="1">
                        <tbody>
                            <tr><th><strong>Material</strong></th><th><strong>Coeff/<br>Cu.M</strong></th><th><strong>Unit</strong></th><th><strong>Total Qty</strong></th></tr>
                            <tr>
                                <td>Cement</td>
                                <td>8.18</td>
                                <td>Bags</td>
                                <td><input id="t4" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                            <tr>
                                <td>20 mm Aggregates</td>
                                <td>28.96</td>
                                <td>Cft</td>
                                <td><input id="t5" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                            <tr>
                                <td>Msand</td>
                                <td>14.48</td>
                                <td>Cft</td>
                                <td><input id="t6" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--- Type3 -->
            <div id="type3" class="type" style="display: none;">
                <div class="row">
                    <div class="col-xs-24 col-sm-6 col-md-4">
                        <h3>Results:</h3>
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-7 "><input id="in8" class="form-control" style="font-size: 17px;" readonly="readonly" type="text" placeholder="0"></div>
                    <div class="col-xs-3 col-sm-6 col-md-3 no-padding">Cubic Feet</div>
                    <div class="col-xs-9 col-sm-6 col-md-7 "><input id="in9" class="form-control" style="font-size: 17px;" readonly="readonly" type="text" placeholder="0"></div>
                    <div class="col-xs-3 col-sm-6 col-md-3 no-padding">Cubic Meters</div>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-sm-6 col-md-6">
                        <h5>Select RCC Design Mix:</h5>
                    </div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" name="pccdesign" type="radio" value="type1">M15 (1:2:4)</label></div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" name="pccdesign" type="radio" value="type2">M20 (1:1.5:3)</label></div>
                    <div class="col-xs-8 col-sm-6 col-md-6"><label class="radio-inline"><input class="selecttype" checked="checked" type="radio" value="type3">M25 (1:1:2)</label></div>
                    <table border="1">
                        <tbody>
                            <tr><th><strong>Material</strong></th><th><strong>Coeff/<br>Cu.M</strong></th><th><strong>Unit</strong></th><th><strong>Total Qty</strong></th></tr>
                            <tr>
                                <td>
                                    <p>Cement</p>
                                    <p><img src="https://media.materialtree.com/wysiwyg/Orient_Logo.jpg" alt="Birla A1" width="75px;" height="75px;"></p>
                                </td>
                                <td>11.25</td>
                                <td>Bags</td>
                                <td><input id="t7" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                            <tr>
                                <td>20 mm Aggregates</td>
                                <td>26.49</td>
                                <td>Cft</td>
                                <td><input id="t8" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                            <tr>
                                <td>Msand</td>
                                <td>13.24</td>
                                <td>Cft</td>
                                <td><input id="t9" class="form-control" style="border-width: 0px;" readonly="readonly" type="number"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="addthis_inline_share_toolbox">
                <p><strong>Share Results:</strong></p>

            </div>
            <div class="col-md-6">
                <p></p>
            </div>
            <div>
<script type="text/javascript" xml="space">// <![CDATA[
require([
    'jquery',
    ], function ($)
    {
        $(document).ready(function () {
            $("#reset").on('click',function(){

                $("#errorHolder").html('');
                $("#in1").val("");
                $("#inch1").val("");
                $("#in2").val("");
                $("#inch2").val("");
                $("#in3").val("");
                $("#inch3").val("");
                $("#in4").val("");
                $("#in5").val("");
                $("#in6").val("");
                $("#in7").val("");
                $("#in8").val("");
                $("#in9").val("");
                $("#t1").val("");
                $("#t2").val("");
                $("#t3").val("");
                $("#t4").val("");
                $("#t5").val("");
                $("#t6").val("");
                $("#t7").val("");
                $("#t8").val("");
                $("#t9").val("");
            });
            $('#type1').show();
            $('.selecttype').click(function(){
                $('.type').hide();
                $('#'+$(this).val()).show();
            });
            $(".selectunits").on('click',function(){
                $("#qty").val(this.value);
                if(this.value=='Feet')
                {
                    $("#in1").attr('placeholder','Feet');
                    $("#inch1").attr('placeholder','Inches');
                    $("#in2").attr('placeholder','Feet');
                    $("#inch2").attr('placeholder','Inches');
                    $("#in3").attr('placeholder','Feet');
                    $("#inch3").attr('placeholder','Inches');
                }
                else
                {
                    $("#in1").attr('placeholder','meters');
                    $("#inch1").attr('placeholder','centimeters');
                    $("#in2").attr('placeholder','meters');
                    $("#inch2").attr('placeholder','centimeters');
                    $("#in3").attr('placeholder','meters');
                    $("#inch3").attr('placeholder','centimeters');
                }
                $("#calculate").trigger("click");
            });
            $("#calculate").click(function(){
                var val1_f=parseInt($("#in1").val());
                var val1_i=parseInt($("#inch1").val());
                var val2_f=parseInt($("#in2").val());
                var val2_i=parseInt($("#inch2").val());
                var val3_f=parseInt($("#in3").val());
                var val3_i=parseInt($("#inch3").val());
                if((!val1_f && !val1_i) || (!val2_f && !val2_i) || (!val3_f && !val3_i))
                {
                    $("#errorHolder").html("Enter required values");
                    return false;
                }
                else
                {
                    $("#errorHolder").html('');
                }
                if($(".selectunits").val()=='Feet')
                {
                    newInchValue=1;
                    newFeetValue=1;

                }
                else
                {
                    newInchValue=0.393701;
                    newFeetValue=3.28084;
                }
                var val1_f=parseInt($("#in1").val());
                var val1_i=parseInt($("#inch1").val());
                var val2_f=parseInt($("#in2").val());
                var val2_i=parseInt($("#inch2").val());
                var val3_f=parseInt($("#in3").val());
                var val3_i=parseInt($("#inch3").val());
                if(!val1_f)
                    val1_f=0;
                if(!val1_i)
                    val1_i=0;
                if(!val2_f)
                    val2_f=0;
                if(!val2_i)
                    val2_i=0;
                if(!val3_f)
                    val3_f=0;
                if(!val3_i)
                    val3_i=0;
                var val1_i_in_ft=parseFloat(val1_i/12);
                var val2_i_in_ft=parseFloat(val2_i/12);
                var val3_i_in_ft=parseFloat(val3_i/12);
                var totallength=newInchValue*val1_f+newFeetValue*val1_i_in_ft;
                var totalbreadth=newInchValue*val2_f+newFeetValue*val2_i_in_ft;
                var totaldepth=newInchValue*val3_f+newFeetValue*val3_i_in_ft;
                if($("#qty").val()=='Feet')
                {
                    var total=parseFloat((totallength)*parseFloat(totalbreadth)*parseFloat(totaldepth)).toFixed(2);
                    var totalsq=parseFloat(total/35.315).toFixed(2);
                }
                else
                {
                    var totalsq=parseFloat((totallength)*parseFloat(totalbreadth)*parseFloat(totaldepth)).toFixed(2);
                    var total=parseFloat(totalsq*35.315).toFixed(2);

                }

                var tab1=parseFloat(totalsq*6.42).toFixed(2);
                var tab2=parseFloat(totalsq*30.02).toFixed(2);
                var tab3=parseFloat(totalsq*15.19).toFixed(2);
                var tab4=parseFloat(totalsq*8.18).toFixed(2);
                var tab5=parseFloat(totalsq*28.96).toFixed(2);
                var tab6=parseFloat(totalsq*14.48).toFixed(2);
                var tab7=parseFloat(totalsq*11.25).toFixed(2);
                var tab8=parseFloat(totalsq*26.49).toFixed(2);
                var tab9=parseFloat(totalsq*13.24).toFixed(2);
                $("#in4").val(total);
                $("#in5").val(totalsq);
                $("#in6").val(total);
                $("#in7").val(totalsq);
                $("#in8").val(total);
                $("#in9").val(totalsq);
                $("#t1").val(tab1);
                $("#t2").val(tab2);
                $("#t3").val(tab3);
                $("#t4").val(tab4);
                $("#t5").val(tab5);
                $("#t6").val(tab6);
                $("#t7").val(tab7);
                $("#t8").val(tab8);
                $("#t9").val(tab9);
            });
            $('.customClass').keypress(function(event){
                return isNumber(event,this)
            });
            function isNumber(event,element){
                return event.charCode >= 48 && event.charCode <= 57
                //var charCode=(evt.which)?evt.which:event.keyCode
            }
        });
});
// ]]>
    
</script>
</div>
<?php get_footer(); ?>
