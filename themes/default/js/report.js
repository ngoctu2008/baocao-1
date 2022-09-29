/**
 * @Project NUKEVIET 4.x
 * @Author  <tuanpb1988@gmail.com>
 * @Copyright (C) 2022 . All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 21 Sep 2022 04:14:05 GMT
 */

 function FormatNumber(str) {

     var strTemp = GetNumber(str);
     if (strTemp.length <= 3) {
         return strTemp;
     }

     strResult = "";
     for (var i = 0; i < strTemp.length; i++) {
         strTemp = strTemp.replace(".", "");
     }

     var m = strTemp.lastIndexOf(",");
     if (m == -1) {
         for (var i = strTemp.length; i >= 0; i--) {
             if (strResult.length > 0 && (strTemp.length - i - 1) % 3 == 0) {
                 strResult = "." + strResult;
             }
             strResult = strTemp.substring(i, i + 1) + strResult;
         }
     } else {
         var strphannguyen = strTemp.substring(0, strTemp.lastIndexOf(","));
         var strphanthapphan = strTemp.substring(strTemp.lastIndexOf(","), strTemp.length);
         var tam = 0;
         for (var i = strphannguyen.length; i >= 0; i--) {

             if (strResult.length > 0 && tam == 4) {
                 strResult = "." + strResult;
                 tam = 1;
             }

             strResult = strphannguyen.substring(i, i + 1) + strResult;
             tam = tam + 1;
         }
         strResult = strResult + strphanthapphan;
     }
     return strResult;
 }

 function GetNumber(str) {
     var count = 0;
     for (var i = 0; i < str.length; i++) {
         var temp = str.substring(i, i + 1);
         if (!(temp == "." || temp == "," || (temp >= 0 && temp <= 9))) {
             alert(inputnumber);
             return str.substring(0, i);
         }
         if (temp == " ") {
             return str.substring(0, i);
         }

         if (temp == ",") {
             if (count > 0) {
                 return str.substring(0, ipubl_date);
             }
             count++;
         }
     }
     return str;
 }

 function IsNumberInt(str) {
     for (var i = 0; i < str.length; i++) {
         var temp = str.substring(i, i + 1);
         if (!(temp == "." || (temp >= 0 && temp <= 9))) {
             alert(inputnumber);
             return str.substring(0, i);
         }
         if (temp == ",") {
             return str.substring(0, i);
         }
     }
     return str;
 }
