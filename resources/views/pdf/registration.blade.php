<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School of Art</title>
</head>

<body>
        <div class="container">
            <div class="logo">
                <img src="{{public_path('/images/logo.png')}}" alt="">
                <h2>2022 ART SUMMER CAMP</h2>
            </div>
           
            <div class="horizontal-line"></div>
            {{-- date schedule  --}}
            <div class="" style="text-align: center;"> 
                <p class="margin_padding"><span><b>June 6 - August 5, 2022</b>  |  1st-12th Grade students  |  Monday-Friday 9am-6pm</span></p>
            </div>
            <div class="horizontal-line"></div>

            {{-- contact section  --}}
            <div class="" style="text-align: center;"> 
                <p class="" style="margin: 1px; padding-top:2px;font-size:13px;"><span>241 North Country Club Road |  Suite 1017  |  Lake Mary, FL 32746</span></p>
                <p class="" style="margin: 2px; padding:2px;font-size:13px;"><span><b>ArtStudioLakeMary.com</b>  | FB:- /ArtStudioLakeMary  |  StellaTagliavore@yahoo.com | phone: 407-330-1135</span></p>    
            </div>

            <div class="horizontal-line"></div>

            <div>
                <table width="100%" style="padding-top: 5px; padding-bottom:5px;">
                    <thead>
                        <tr>
                            <td width="50%" style="border-right:1px solid black;  padding:15px; font-size:12px; vertical-align: top;"> 
                                <h4 style="margin-top:-10px; margin-bottom:-5px;font-size: 15px"><b>ONE WEEK CAMP</b></h4>
                                <p>Our One Week Art Camp is designed to provide creative learning experiences through a hands-on approach, working with all mediums and materials. The lessons and assignments are focused on 2 dimensional art. Drawing, Cartooning, Paintingm Design and Illustration are included. Elements & Principles of Art and Design, Color Theory, Perspectives and more are taught through out all the weeks of Summer Art Camp. All lessions and activities are adjustable according to each student's interests and abilities.
                                </p>
                                <p style="font-size: 12px;margin-top:-5px; margin-bottom:-5px"><b>HALF DAY: $198 | 9am-1pm or 2pm-6pm</b></p>
                                <p style="font-size: 12px;margin-top:px; margin-bottom:-5px"><b>FULL DAY: $345 | 9am-4pm ($10 aftercare)</b></p>
                            </td>
                            <td width="50%" style="margin:-0px; padding:15px; font-size:12px; vertical-align: top;">
                                <h4 style="margin-top:-10px; margin-bottom:-5px;font-size: 15px"><b>TWO WEEK CAMP</b></h4>
                                <p class="margin-top:-30px">The Two Week Art Camp offers everything that's included in the 1 week camp, plus 3-dimentionalart : Pottery and Sculpture. Students learn to use potter wheels and hand-building techniques from start to finish, to create unique pieces of pottery. We work diligently with students through a step-by-step process using differnt materials to complete on-of-a-kind sculptures.
                                </p>
                                <p style="font-size: 12px;margin-top:-5px; margin-bottom:-5px"><b>HALF DAY: $398 | 9am-1pm or 2pm-6pm</b></p>
                                <p style="font-size: 12px;margin-top:px; margin-bottom:-5px"><b>FULL DAY: $698 | 9am-4pm ($20 aftercare)</b></p>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="horizontal-line"></div>
            <div style="text-align:center">
                <h3 style="margin: 7px; font-size:16px">2 HOUR WEEKLY CLASSES: 2-4PM OR 4-6PM | $160/MONTH</h3>
            </div>
            <div class="horizontal-line"></div>
            
            {{-- last table  --}}
            <div style="padding: 5px">
                <table width="100%">
                    <thead>
                        <tr>
                            <td width="60%" style="padding-right:10px">
                                <label class="form-label" for="">Student Name</label><br>
                                <input type="text" value="{{$sumCampReg->name}}" class="form-input"> 
                                
                                <table width="100%">
                                    <tr>
                                        <td width="45%" >
                                            <label class="form-label" for="">age</label><br>
                                            <input type="text" value="{{$sumCampReg->age}}" class="form-input1"> 
                                        </td>
                                        <td width="45%">
                                            <label class="form-label" for="">Grade</label><br>
                                            <input type="text" value="{{$sumCampReg->grade}}" class="form-input2"> 
                                        </td>
                                    </tr>
                                </table>

                                <label class="form-label" for="">Parents/Guardian Name</label><br>
                                <input type="text" value="{{$sumCampReg->guardian_name}}" class="form-input">

                                <label class="form-label" for="">Home Address</label><br>
                                <input type="text" value="{{$sumCampReg->home_address}}" class="form-input">

                                <table width="100%">
                                    <tr>
                                        <td width=50%" >
                                            <label class="form-label" for="">Work</label><br>
                                            <input type="text" value="{{$sumCampReg->work}}" class="form-input1"> 
                                        </td>
                                        <td width="50%">
                                            <label class="form-label" for="">Zip Code</label><br>
                                            <input type="text" value="{{$sumCampReg->zipcode}}" class="form-input2"> 
                                        </td>
                                    </tr>
                                </table>

                                <table width="100%">
                                    <tr>
                                        <td width=50%" >
                                            <label class="form-label" for="">Email</label><br>
                                            <input type="text" value="{{$sumCampReg->email}}" class="form-input1"> 
                                        </td>
                                        <td width="50%">
                                            <label class="form-label" for="">Emergency Contact</label><br>
                                            <input type="text" value="{{$sumCampReg->emergency_contact}}" class="form-input2"> 
                                        </td>
                                    </tr>
                                </table>
                                <label class="form-label" for="">About your child</label><br>
                                <input type="text" value="{{$sumCampReg->about}}" class="form-input">

                                <div style="margin-top:10px">
                                      <table width="100%">
                                            <thead>
                                                <tr>
                                                    <td width="5%" style="vertical-align: top">
                                                        <input type="checkbox" {{  ($sumCampReg->student_type == 1 ? 'checked' : '') }} style="color:blue">
                                                    </td>
                                                    <td width="95%" style="vertical-align: top;" >
                                                        New Student - <i> All new students need to schedule a time for orientation</i>
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table> 
                                       
                                </div>                                
                               
                            </td>
                            <td width="35%" style="border-left:1px solid black; vertical-align: top; padding-left:10px">
                                
                                {{-- camp hours start  --}}
                                <h4><b>Camp Hours</b></h4>
                                <div style="margin-top:-15px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox" {{$sumCampReg->camp_hours->full_day == 1 ? 'checked' : ''}} style="color:blue"> 
                                                </td>
                                                <td width="85%" style="vertical-align: top" >
                                                    Full Day - [9AM - 4PM]
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox" {{$sumCampReg->camp_hours->after_care == 1 ? 'checked' : ''}} style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top" >
                                                    After Care
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox" {{$sumCampReg->camp_hours->halfday == 1 ? 'checked' : ''}} style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top" >
                                                    Half Day - [9AM - 1PM] 
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  {{$sumCampReg->camp_hours->afternoon == 1 ? 'checked' : ''}} style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top" >
                                                    2PM - 6PM
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                {{-- camp hours end  --}}

                                {{-- Weekly Class hours start  --}}
                                <div style="margin-top:-15px">
                                    <h4><b>Weekly Class hours/days</b></h4>
                                    <div style="margin-top:-20px;">
                                        <table width="100%">
                                            <thead>
                                                <tr>
                                                    <td width="33%" style="vertical-align: top">
                                                        <table width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <td width="15%" style="vertical-align: top">
                                                                        <input type="checkbox" {{$sumCampReg->weekly_class_hours->tuesday == 1 ? 'checked' : ''}} style="color:blue">
                                                                    </td>
                                                                    <td width="85%" style="vertical-align: top" >
                                                                        Tues  
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </td>
                                                    <td width="33%" style="vertical-align: top" >
                                                        <table width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <td width="15%" style="vertical-align: top">
                                                                        <input type="checkbox" {{$sumCampReg->weekly_class_hours->wednesday == 1 ? 'checked' : ''}} style="color:blue">
                                                                    </td>
                                                                    <td width="85%" style="vertical-align: top" >
                                                                        Wed
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </td>
                                                    <td width="33%" style="vertical-align: top" >
                                                        <table width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <td width="15%" style="vertical-align: top">
                                                                        <input type="checkbox" {{$sumCampReg->weekly_class_hours->thursday == 1 ? 'checked' : ''}} style="color:blue">
                                                                    </td>
                                                                    <td width="85%" style="vertical-align: top" >
                                                                        Thurs
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </thead>
                                        </table>

                                        <div style="margin-top: -10px">
                                            <table width="100%">
                                                <thead>
                                                    <tr>
                                                        <td width="33%" style="vertical-align: top">
                                                            <table width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <td width="15%" style="vertical-align: top">
                                                                            <input type="checkbox" {{$sumCampReg->weekly_class_hours->two_to_four == 1 ? 'checked' : ''}} style="color:blue">
                                                                        </td>
                                                                        <td width="85%" style="vertical-align: top" >
                                                                            2-4pm
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </td>
                                                        <td width="33%" style="vertical-align: top" >
                                                            <table width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <td width="15%" style="vertical-align: top">
                                                                            <input type="checkbox"  {{$sumCampReg->weekly_class_hours->four_to_six == 1 ? 'checked' : ''}}  style="color:blue">
                                                                        </td>
                                                                        <td width="85%" style="vertical-align: top" >
                                                                            4-6pm
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </td>
                                                        <td width="33%" style="vertical-align: top" >
                                                        
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                                {{-- weekly class hours end  --}}

                                  <div style="margin-top:-15px">
                                    <h4><b>Dates:</b></h4>
                                    <div style="margin-top:-15px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top; font-size:13px; padding-top:4px" >
                                                    #1 June 6-17(2 Week Camp)
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top; font-size:13px; padding-top:4px" >
                                                    
                                                    #2 June 20-24(1 Week Camp)
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top; font-size:13px; padding-top:4px" >
                                                    #3 June 27-July B(2 Week Camp)
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top; font-size:13px; padding-top:4px" >
                                                    #4 July 11-15(1 Week Camp)
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top; font-size:13px; padding-top:4px" >
                                                    #5 june 18-29(2 Week Camp)
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="margin-top:-5px;">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td width="15%" style="vertical-align: top">
                                                    <input type="checkbox"  style="color:blue">
                                                </td>
                                                <td width="85%" style="vertical-align: top; font-size:13px; padding-top:4px" >
                                                    #6 august 1-5(1 Week Camp)
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                  </div>

                                <div style="margin-top:-15px">
                                    <h4><b>Registration Fees:</b></h4> 
                                    <div style="margin-top: -35px; font-size:14px">
                                        <p>A non-refundable fee of $20 apply to non ASLM School of Art Students</p>
                                    </div>
                                </div>

                            </td>
                                    
                        </tr>
                    </thead>
                    
                </table>

                <div class="signature">
                    <p class="border-top"> &nbsp; Signature  &nbsp;</p>
                </div>
            </div>
        </div>

<style>
    body{
        font-family: sans-serif;
    }
    .container{
        width: 100%;
        border: 1px solid black;
    }
    .logo{
        text-align: center;
        padding-top: 5px;
    }
    .logo img{
        width:30%; 
    }
    .logo h2{
        margin-top: -0px;
        margin-bottom: -0px;
        font-size: 17px;
    }
    .horizontal-line{
        margin-top: -0px;
        margin-bottom: -0px;
        background-color: black;
        width: 100%;
        height: 1px;
    }
   
    .margin_padding{
        margin: 2px;
        padding: 2px; 
    }
    .form-input{
        padding: 8px;
        width: 95%;
        border-radius: 5px;
        font-size: 14px;
    }
    .form-label{
        font-size: 15px;
    }

    .form-input1{
        padding: 8px;
        width: 90%;
        border-radius: 5px;
        font-size: 14px;
        
    }
    .form-input2{
        padding: 8px;
        width: 90%;
        border-radius: 5px;
        font-size: 14px;
        
    }
    .signature{
        margin-top: 35px;
        margin-bottom: -10px;
        text-align: right;
        margin-right: 60px;  
        color: #111827;
    }
    .border-top{
        display: inline-block;
        border-top: 1px solid #111827;
    }
</style>
</body>
</html>