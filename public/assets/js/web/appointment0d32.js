$(document).ready((function(){"use strict";var e;$("#patientId, #doctorId, #departmentId").select2({width:"100%"}),$("#opdDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD",sideBySide:!0,minDate:moment().subtract(1,"days"),useCurrent:!1})),$("#patientId").first().focus(),$("#departmentId").on("change",(function(){$(".error-message").css("display","none"),$("#opdDate").data("DateTimePicker").clear(),$.ajax({url:doctorDepartmentUrl,type:"get",dataType:"json",data:{id:$(this).val()},success:function(e){$("#doctorId").empty(),$("#doctorId").append($('<option value="">Select Doctor</option>')),$.each(e.data,(function(e,a){$("#doctorId").append($("<option></option>").attr("value",e).text(a))}))}})}));var a,t,o,s,i,r=!1;$("#doctorId").on("change",(function(){r&&($(".error-message").css("display","none"),$("#opdDate").data("DateTimePicker").clear(),r=!0),$(".error-message").css("display","none"),e=$(this).val(),r=!0})),$("#opdDate").on("dp.change",(function(){if($(".doctor-schedule").css("display","none"),$(".error-message").css("display","none"),$(".available-slot-heading").css("display","none"),$(".color-information").css("display","none"),$(".time-slot").remove(),""==$("#departmentId").val())return $("#validationErrorsBox").show().html("Please select Doctor Department"),$("#validationErrorsBox").delay(5e3).fadeOut(),$("#opdDate").val(""),$("#opdDate").data("DateTimePicker").clear(),!1;if(""==$("#doctorId").val())return $("#validationErrorsBox").show().html("Please select Doctor"),$("#validationErrorsBox").delay(5e3).fadeOut(),$("#opdDate").val(""),$("#opdDate").data("DateTimePicker").clear(),!1;var s=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][new Date($(this).val()).getDay()];if(a=$(this).val(),null==s||""==s)return!1;$.ajax({type:"GET",url:doctorScheduleList,data:{day_name:s,doctor_id:e},success:function(e){if(e.success&&""!=e.data)if(0!=e.data.scheduleDay.length){var o=a+" "+e.data.scheduleDay[0].available_from,s=a+" "+e.data.scheduleDay[0].available_to,i=e.data.perPatientTime[0].per_patient_time.split(":"),r=60*+i[0]+ +i[1],n=parseIn(o),d=parseIn(s);if((t=getTimeIntervals(n,d,r)).length>0){var l;$(".available-slot-heading").css("display","block"),$(".color-information").css("display","block");var c="";for(l=0;l<t.length;++l){var p=[{index:l,timeSlot:t[l]}];c+=prepareTemplateRender("#appointmentSlotTemplate",p)}$(".available-slot").append(c)}"00:00:00"!=e.data.scheduleDay[0].available_from&&"00:00:00"!=e.data.scheduleDay[0].available_to&&o!=s?($(".doctor-schedule").css("display","block"),$(".color-information").css("display","block"),$(".day-name").html(e.data.scheduleDay[0].available_on),$(".schedule-time").html("["+e.data.scheduleDay[0].available_from+" - "+e.data.scheduleDay[0].available_to+"]")):($(".doctor-schedule").css("display","none"),$(".color-information").css("display","none"),$(".error-message").css("display","block"),$(".error-message").html("Doctor Schedule not available this date."))}else $(".doctor-schedule").css("display","none"),$(".color-information").css("display","none"),$(".error-message").css("display","block"),$(".error-message").html("Doctor Schedule not available this date.")}}),(isCreate||isEdit)&&setTimeout((function(){if(isCreate)var s={editSelectedDate:a,doctor_id:e};else s={editSelectedDate:a,editId:appointmentEditId,doctor_id:e};$.ajax({url:getBookingSlot,type:"GET",data:s,success:function(e){o=e.data.bookingSlotArr,e.data.hasOwnProperty("onlyTime")?(e.data.bookingSlotArr.length>0&&(i=e.data.onlyTime.toString(),$.each(e.data.bookingSlotArr,(function(e,a){$.each(t,(function(e,t){a==t&&$(".time-interval").each((function(){$(this).data("id")==e&&$(this).html()!=i&&($(this).parent().css({"background-color":"#ffa721",border:"1px solid #ffa721",color:"#ffffff"}),$(this).parent().addClass("booked"),$(this).parent().children().prop("disabled",!0))}))}))}))),$(".time-interval").each((function(){$(this).html()==i&&e.data.bookingSlotArr.length>0&&($(this).parent().addClass("time-slot-book"),$(this).parent().removeClass("booked"),$(this).parent().children().prop("disabled",!1),$(this).click())}))):o.length>0&&$.each(o,(function(e,a){$.each(t,(function(e,t){a==t&&$(".time-interval").each((function(){$(this).data("id")==e&&($(this).parent().addClass("time-slot-book"),$(".time-slot-book").css({"background-color":"#ffa721",border:"1px solid #ffa721",color:"#ffffff"}),$(this).parent().addClass("booked"),$(this).parent().children().prop("disabled",!0))}))}))}))}})}),200)})),isEdit&&($("#doctorId").trigger("change",(function(a){e=$(this).val()})),$("#opdDate").trigger("dp.change",(function(){new Date($(this).val())}))),window.parseIn=function(e){var a=new Date;return a.setHours(e.substring(11,13)),a.setMinutes(e.substring(14,16)),a},window.getTimeIntervals=function(e,a,t){for(var o=[];e<a;)o.push(e.toTimeString().substring(0,5)),e.setMinutes(e.getMinutes()+t);return o},$(document).on("click",".time-interval",(function(e){var a=$(e.currentTarget).data("id");$(this).data("id")==a&&$(this).parent().hasClass("booked")&&$(".time-slot-book").css("background-color","#ffa0a0"),s=$(this).text(),$(".time-slot").removeClass("time-slot-book"),$(this).parent().addClass("time-slot-book")})),$(document).on("click",".time-interval",(function(){i=$(this).text()}));var n=!1;function d(){$("#overlay-screen-lock").addClass("d-none")}$(".new-patient-radio").change((function(){$(this).is(":checked")&&($(".old-patient").addClass("d-none"),$(".first-name-div").removeClass("d-none"),$(".last-name-div").removeClass("d-none"),$(".gender-div").removeClass("d-none"),$(".password-div").removeClass("d-none"),$(".confirm-password-div").removeClass("d-none"),$("#firstName").prop("required",!0),$("#lastName").prop("required",!0),$("#password").prop("required",!0),$("#confirmPassword").prop("required",!0),n=!1)})),$(".old-patient-radio").change((function(){$(this).is(":checked")&&($(".old-patient").removeClass("d-none"),$(".first-name-div").addClass("d-none"),$(".last-name-div").addClass("d-none"),$(".gender-div").addClass("d-none"),$(".password-div").addClass("d-none"),$(".confirm-password-div").addClass("d-none"),$("#firstName").prop("required",!1),$("#lastName").prop("required",!1),$("#password").prop("required",!1),$("#confirmPassword").prop("required",!1),n=!0)})),$(".old-patient-email").focusout((function(){var e=$(".old-patient-email").val();n&&!isEmpty(e)&&$.ajax({url:"appointments/"+e+"/patient-detail",type:"get",success:function(e){null!=e.data?($("#patient").empty(),$.each(e.data,(function(e,a){$("#patientName").val(a),$("#patient").val(e)}))):displayErrorMessage("Patient not exists or status is not active.")}})})),$("#appointmentForm").on("submit",(function(e){if(!(e.preventDefault(),$("#overlay-screen-lock").removeClass("d-none"),n||(a=$("#password").val(),t=$("#confirmPassword").val(),""==a||""==t?(displayErrorMessage("Please fill all the required fields."),0):a===t||(displayErrorMessage("Password and Confirm password not match."),0))))return d(),!1;var a,t;if(null==s||""==s)return displayErrorMessage("Please select appointment time slot"),d(),!1;var o=$(this).serialize()+"&time="+s;$.ajax({url:appointmentSaveUrl,type:"POST",dataType:"json",data:o,success:function(e){d(),displaySuccessMessage(e.message),setTimeout((function(){location.reload()}),4e3)},error:function(e){printErrorMessage("#validationErrorsBox",e),$(".alert").delay(5e3).slideUp(300),d()}})})),$("#reset").click((function(){$(this).closest("#appointmentForm").find("input[type=text], input[type=password], input[type=email], textarea").val(""),$("#patientId, #doctorId, #departmentId").val("").trigger("change.select2")})),$("#firstName, #lastName").keypress((function(e){if(32===e.which)return!1}))}));