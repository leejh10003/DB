<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <style>
      @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic);
      body {margin:0;background:#E5E5E5;font-weight:300;color:#404040;font-family: 'Nanum Gothic', serif;letter-spacing:.1px;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;}
    #floating-button{
      width: 55px;
      height: 55px;
      border-radius: 50%;
      background: #db4437;
      position: fixed;
      bottom: 30px;
      right: 30px;
      cursor: pointer;
      box-shadow: 0px 2px 5px #666;
    }

    .plus{
      color: white;
      position: absolute;
      top: 0;
      display: block;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
      padding: 0;
      margin: 0;
      line-height: 55px;
      font-size: 38px;
      font-family: 'Roboto';
      font-weight: 300;
      animation: plus-out 0.3s;
      transition: all 0.3s;
    }

    #container-floating{
      position: fixed;
      width: 70px;
      height: 70px;
      bottom: 30px;
      right: 30px;
      z-index: 50px;
    }

    #container-floating:hover{
      height: 400px;
      width: 90px;
      padding: 30px;
    }

    #container-floating:hover .plus{
      animation: plus-in 0.15s linear;
      animation-fill-mode: forwards;
    }

    .edit{
      position: absolute;
      top: 0;
      display: block;
      bottom: 0;
      left: 0;
      display: block;
      right: 0;
      padding: 0;
      opacity: 0;
      margin: auto;
      line-height: 65px;
      transform: rotateZ(-70deg);
      transition: all 0.3s;
      animation: edit-out 0.3s;
    }

    #container-floating:hover .edit{
      animation: edit-in 0.2s;
      animation-delay: 0.1s;
      animation-fill-mode: forwards;
    }

    @keyframes edit-in{
        from {opacity: 0; transform: rotateZ(-70deg);}
        to {opacity: 1; transform: rotateZ(0deg);}
    }

    @keyframes edit-out{
        from {opacity: 1; transform: rotateZ(0deg);}
        to {opacity: 0; transform: rotateZ(-70deg);}
    }

    @keyframes plus-in{
        from {opacity: 1; transform: rotateZ(0deg);}
        to {opacity: 0; transform: rotateZ(180deg);}
    }

    @keyframes plus-out{
        from {opacity: 0; transform: rotateZ(180deg);}
        to {opacity: 1; transform: rotateZ(0deg);}
    }

    .nds{
      width: 40px;
      height: 40px;
      border-radius: 50%;
      position: fixed;
      z-index: 300;
      transform:  scale(0);
      cursor: pointer;
    }

    .nd1{
      background: #d3a411;
      right: 40px;
      bottom: 120px;
      animation-delay: 0.2s;
        animation: bounce-out-nds 0.3s linear;
      animation-fill-mode:  forwards;
    }

    .nd3{
      background: #3c80f6;
      right: 40px;
      bottom: 180px;
      animation-delay: 0.15s;
        animation: bounce-out-nds 0.15s linear;
      animation-fill-mode:  forwards;
    }

    .nd4{
      background: #ba68c8;
      right: 40px;
      bottom: 240px;
      animation-delay: 0.1s;
        animation: bounce-out-nds 0.1s linear;
      animation-fill-mode:  forwards;
    }

    .nd5{
      background:#ffffff;
      background-size: 100%;
      right: 40px;
      bottom: 300px;
      animation-delay: 0.08s;
      animation: bounce-out-nds 0.1s linear;
      animation-fill-mode:  forwards;
    }

    @keyframes bounce-nds{
        from {opacity: 0;}
        to {opacity: 1; transform: scale(1);}
    }

    @keyframes bounce-out-nds{
        from {opacity: 1; transform: scale(1);}
        to {opacity: 0; transform: scale(0);}
    }

    #container-floating:hover .nds{
      
      animation: bounce-nds 0.1s linear;
      animation-fill-mode:  forwards;
    }

    #container-floating:hover .nd3{
      animation-delay: 0.08s;
    }
    #container-floating:hover .nd4{
      animation-delay: 0.15s;
    }
    #container-floating:hover .nd5{
      animation-delay: 0.2s;
    }

    .letter{
      font-size: 23px;
      font-family: 'Roboto';
      color: white;
      position: absolute;
      left: 0;
      right: 0;
      margin: 0;
      top: 0;
      bottom: 0;
      text-align: center;
      line-height: 40px;
    }

    .reminder{
      position: absolute;
      left: 0;
      right: 0;
      margin: auto;
      top: 0;
      bottom: 0;
      line-height: 40px;
    }

    .profile{
      border-radius: 50%;
      width: 40px;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      right: 20px;
    }
    .toolbar {
      font-weight:bold;
      text-align:right;
      color: white;
      height:50px;
      background:#03A9F4;
      box-shadow:0px 2px 6px 3px rgba(0, 0, 0, 0.2);
      padding-top:14px;
      padding-right:100px;
      padding-left: 100px;
    }
    *,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#demo {
  margin: 20px auto;
  max-width: 960px;
}
#demo h1 {
  font-size: 2.4rem;
  line-height: 3.2rem;
  letter-spacing: 0;
  font-weight: 300;
  color: #212121;
  text-transform: inherit;
  margin-bottom: 1rem;
  text-align: center;
}
#demo h2 {
  font-size: 1.5rem;
  line-height: 2.8rem;
  letter-spacing: 0.01rem;
  font-weight: 400;
  color: #212121;
  text-align: center;
}
.shadow-z-1 {
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 2rem;
  background-color: #fff;
}
.table > thead > tr,
.table > tbody > tr,
.table > tfoot > tr {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  text-align: left;
  padding: 30px 7px;
  vertical-align: top;
  border-top: 0;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.table > thead > tr > th {
  font-weight: 400;
  color: #757575;
  vertical-align: bottom;
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}
.table .table {
  background-color: #fff;
}
.table .no-border {
  border: 0;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 0.8rem;
}
.table-bordered {
  border: 0;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 0;
  border-bottom: 1px solid #e0e0e0;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: rgba(0, 0, 0, 0.12);
}
@media screen and (max-width: 768px) {
  .table-responsive-vertical > .table {
    margin-bottom: 0;
    background-color: transparent;
  }
  .table-responsive-vertical > .table > thead,
  .table-responsive-vertical > .table > tfoot {
    display: none;
  }
  .table-responsive-vertical > .table > tbody {
    display: block;
  }
  .table-responsive-vertical > .table > tbody > tr {
    display: block;
    border: 1px solid #e0e0e0;
    border-radius: 2px;
    margin-bottom: 1.6rem;
  }
  .table-responsive-vertical > .table > tbody > tr > td {
    background-color: #fff;
    display: block;
    vertical-align: middle;
    text-align: right;
  }
  .table-responsive-vertical > .table > tbody > tr > td[data-title]:before {
    content: attr(data-title);
    float: left;
    font-size: inherit;
    font-weight: 400;
    color: #757575;
  }
  .table-responsive-vertical.shadow-z-1 {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .table-responsive-vertical.shadow-z-1 > .table > tbody > tr {
    border: none;
    -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  }
  .table-responsive-vertical > .table-bordered {
    border: 0;
  }
  .table-responsive-vertical > .table-bordered > tbody > tr > td {
    border: 0;
    border-bottom: 1px solid #e0e0e0;
  }
  .table-responsive-vertical > .table-bordered > tbody > tr > td:last-child {
    border-bottom: 0;
  }
  .table-responsive-vertical > .table-striped > tbody > tr > td,
  .table-responsive-vertical > .table-striped > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical > .table-striped > tbody > tr > td:nth-child(odd) {
    background-color: #f5f5f5;
  }
  .table-responsive-vertical > .table-hover > tbody > tr:hover > td,
  .table-responsive-vertical > .table-hover > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical > .table-hover > tbody > tr > td:hover {
    background-color: rgba(0, 0, 0, 0.12);
  }
}
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > th {
  background-color: #fde0dc;
}
.table-hover.table-mc-red > tbody > tr:hover > td,
.table-hover.table-mc-red > tbody > tr:hover > th {
  background-color: #f9bdbb;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td:nth-child(odd) {
    background-color: #fde0dc;
  }
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr > td:hover {
    background-color: #f9bdbb;
  }
}
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > th {
  background-color: #fce4ec;
}
.table-hover.table-mc-pink > tbody > tr:hover > td,
.table-hover.table-mc-pink > tbody > tr:hover > th {
  background-color: #f8bbd0;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td:nth-child(odd) {
    background-color: #fce4ec;
  }
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr > td:hover {
    background-color: #f8bbd0;
  }
}
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > th {
  background-color: #f3e5f5;
}
.table-hover.table-mc-purple > tbody > tr:hover > td,
.table-hover.table-mc-purple > tbody > tr:hover > th {
  background-color: #e1bee7;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td:nth-child(odd) {
    background-color: #f3e5f5;
  }
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr > td:hover {
    background-color: #e1bee7;
  }
}
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > th {
  background-color: #ede7f6;
}
.table-hover.table-mc-deep-purple > tbody > tr:hover > td,
.table-hover.table-mc-deep-purple > tbody > tr:hover > th {
  background-color: #d1c4e9;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td:nth-child(odd) {
    background-color: #ede7f6;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr > td:hover {
    background-color: #d1c4e9;
  }
}
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > th {
  background-color: #e8eaf6;
}
.table-hover.table-mc-indigo > tbody > tr:hover > td,
.table-hover.table-mc-indigo > tbody > tr:hover > th {
  background-color: #c5cae9;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td:nth-child(odd) {
    background-color: #e8eaf6;
  }
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr > td:hover {
    background-color: #c5cae9;
  }
}
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > th {
  background-color: #e7e9fd;
}
.table-hover.table-mc-blue > tbody > tr:hover > td,
.table-hover.table-mc-blue > tbody > tr:hover > th {
  background-color: #d0d9ff;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td:nth-child(odd) {
    background-color: #e7e9fd;
  }
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr > td:hover {
    background-color: #d0d9ff;
  }
}
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > th {
  background-color: #e1f5fe;
}
.table-hover.table-mc-light-blue > tbody > tr:hover > td,
.table-hover.table-mc-light-blue > tbody > tr:hover > th {
  background-color: #b3e5fc;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td:nth-child(odd) {
    background-color: #e1f5fe;
  }
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr > td:hover {
    background-color: #b3e5fc;
  }
}
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > th {
  background-color: #e0f7fa;
}
.table-hover.table-mc-cyan > tbody > tr:hover > td,
.table-hover.table-mc-cyan > tbody > tr:hover > th {
  background-color: #b2ebf2;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td:nth-child(odd) {
    background-color: #e0f7fa;
  }
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr > td:hover {
    background-color: #b2ebf2;
  }
}
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > th {
  background-color: #e0f2f1;
}
.table-hover.table-mc-teal > tbody > tr:hover > td,
.table-hover.table-mc-teal > tbody > tr:hover > th {
  background-color: #b2dfdb;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td:nth-child(odd) {
    background-color: #e0f2f1;
  }
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr > td:hover {
    background-color: #b2dfdb;
  }
}
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > th {
  background-color: #d0f8ce;
}
.table-hover.table-mc-green > tbody > tr:hover > td,
.table-hover.table-mc-green > tbody > tr:hover > th {
  background-color: #a3e9a4;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td:nth-child(odd) {
    background-color: #d0f8ce;
  }
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr > td:hover {
    background-color: #a3e9a4;
  }
}
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > th {
  background-color: #f1f8e9;
}
.table-hover.table-mc-light-green > tbody > tr:hover > td,
.table-hover.table-mc-light-green > tbody > tr:hover > th {
  background-color: #dcedc8;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td:nth-child(odd) {
    background-color: #f1f8e9;
  }
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr > td:hover {
    background-color: #dcedc8;
  }
}
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > th {
  background-color: #f9fbe7;
}
.table-hover.table-mc-lime > tbody > tr:hover > td,
.table-hover.table-mc-lime > tbody > tr:hover > th {
  background-color: #f0f4c3;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td:nth-child(odd) {
    background-color: #f9fbe7;
  }
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr > td:hover {
    background-color: #f0f4c3;
  }
}
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > th {
  background-color: #fffde7;
}
.table-hover.table-mc-yellow > tbody > tr:hover > td,
.table-hover.table-mc-yellow > tbody > tr:hover > th {
  background-color: #fff9c4;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td:nth-child(odd) {
    background-color: #fffde7;
  }
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr > td:hover {
    background-color: #fff9c4;
  }
}
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > th {
  background-color: #fff8e1;
}
.table-hover.table-mc-amber > tbody > tr:hover > td,
.table-hover.table-mc-amber > tbody > tr:hover > th {
  background-color: #ffecb3;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td:nth-child(odd) {
    background-color: #fff8e1;
  }
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr > td:hover {
    background-color: #ffecb3;
  }
}
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > th {
  background-color: #fff3e0;
}
.table-hover.table-mc-orange > tbody > tr:hover > td,
.table-hover.table-mc-orange > tbody > tr:hover > th {
  background-color: #ffe0b2;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td:nth-child(odd) {
    background-color: #fff3e0;
  }
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr > td:hover {
    background-color: #ffe0b2;
  }
}
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > th {
  background-color: #fbe9e7;
}
.table-hover.table-mc-deep-orange > tbody > tr:hover > td,
.table-hover.table-mc-deep-orange > tbody > tr:hover > th {
  background-color: #ffccbc;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td:nth-child(odd) {
    background-color: #fbe9e7;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr > td:hover {
    background-color: #ffccbc;
  }
}

    </style>
  </head>
  <body>
    <nav class="toolbar">
    <?php
      session_start();
      if(!isset($_SESSION['member_id'])) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit;
      }
      $member_id = $_SESSION['member_id'];
      echo "<span style='float:left;'>고려대학교 수강평가 시스템</span>";
      echo "<span style='vertical-align:super;'>안녕하세요. " . $member_id . "님</span>";
      echo "
      <svg onclick=\"location.href='logout.php'\"style=\"width:24px;height:24px;cursor:pointer;\" viewBox=\"0 0 24 24\">
          <path fill=\"#ffffff\" d=\"M18,6H16V15C16,16 15.82,16.64 15,16.95L9.5,19V6C9.5,5.3 9.74,4.1 11,4.24L18,5V3.79L9,2.11C8.64,2.04 8.36,2 8,2C6.72,2 6,2.78 6,4V20.37C6,21.95 7.37,22.26 8,22L17,18.32C18,17.91 18,17 18,16V6Z\" />
      </svg>";
    ?>
    </nav>
    <div id="demo">
      <?php
        if(isset($_SESSION['member_id'])){
            $level=$_SESSION['level'];
            $title = $_GET['title'];
            $course_id = $_GET['course_id'];
            $credits = $_GET['credits'];
            $dept_name = $_GET['dept_name'];
            $dbconn = pg_connect("host=localhost dbname=joonji user=joonji password=Male8723%")
                or die('db 시스템에 연결할 수 없습니다. 관리자에게 문의하십시오: ' . pg_last_error());
            
            $query = "select * from course where";
            $concat = "";
            if(strlen($title . $course_id . $dept_name) === 0 && $credits === 'on'){
                echo "<script>alert('잘못된 입력입니다.');history.back();</script>";
            }
            if($title != ""){
                $concat = $concat . "and title like '%" . $title . "%' ";
            }
            if($course_id != ""){
                $concat = $concat . "and course_id like '%" . $course_id . "%' ";
            }
            if($credits != "on"){
                $concat = $concat . "and credits=" . $credits . " ";
            }
            if($dept_name != ""){
                $concat = $concat . "and dept_name like '%" . $dept_name . "%' ";
            }
            $query .= substr($concat, 3);
            $query = substr($query, 0, strlen($query) - 1) . ';';
            $result = pg_query($query)
                or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
            $column_num = pg_num_fields($result);
            
            echo "<div id='demo'>
                <div class='table-responsive-vertical shadow-z-1'>
                <table id='table' class='table table-hover table-mc-light-blue'>
                <thead>
                <tr>
                    <th>학수번호</th>
                    <th>과목명</th>
                    <th>개설학과</th>
                    <th>학점</th>
                    <th>섹션 추가</th>";
            if($_SESSION['level'] > 1){
                echo "<th>삭제</th>";
            }
            echo "</tr></thead><tbody>";
            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                echo "\t<tr>\n";
                foreach ($line as $col_value) {
                    echo "\t\t<td>$col_value</td>\n";
                }
                echo "<td><a href='./sectionAdd.php?course_id=" . $line['course_id'] . "'><svg style='width:24px;height:24px' viewBox='0 0 24 24'>
    <path fill=
    '#757575' d='M19,19V5H5V19H19M19,3A2,2 0 0,1 21,5V19C21,20.11 20.1,21 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M16.7,9.35L15.7,10.35L13.65,8.3L14.65,7.3C14.86,7.08 15.21,7.08 15.42,7.3L16.7,8.58C16.92,8.79 16.92,9.14 16.7,9.35M7,14.94L13.06,8.88L15.12,10.94L9.06,17H7V14.94Z' />
</svg></a></td>";
                if($_SESSION['level'] > 1){
                    echo "<td><a href='deleteCourse.php?course_id=" . $line['course_id'] . "'><svg style='width:24px;height:24px' viewBox='0 0 24 24'>
                        <path fill='#757575' d='M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8.46,11.88L9.87,10.47L12,12.59L14.12,10.47L15.53,11.88L13.41,14L15.53,16.12L14.12,17.53L12,15.41L9.88,17.53L8.47,16.12L10.59,14L8.46,11.88M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z' />
                    </svg></a></td>";
                }
                echo "\t</tr>\n";
            }
            echo "</tbody></table></div>\n";
            
            
            
            
                
            $query = "select * from section natural join prof natural join course where ";
            $concat = "";
            if(strlen($title . $course_id . $credits . $dept_name) === 0){
                echo "<script>alert('잘못된 입력입니다.');history.back();</script>";
            }
            if($title != ""){
                $concat = $concat . "and title like '%" . $title . "%' ";
            }
            if($course_id != ""){
                $concat = $concat . "and course_id like '%" . $course_id . "%' ";
            }
            if($credits != "on"){
                $concat = $concat . "and credits=" . $credits . " ";
            }
            if($dept_name != ""){
                $concat = $concat . "and dept_name like '%" . $dept_name . "%' ";
            }
            $query .= substr($concat, 3);
            $query = substr($query, 0, strlen($query) - 1) . ';';
            $result = pg_query($query)
                or die('db에 문제가 발생했습니다. 관리자에게 문의하십시오.: ' . pg_last_error());
            $column_num = pg_num_fields($result);

            echo "<div id='demo'>
                <div class='table-responsive-vertical shadow-z-1'>
                <table id='table' class='table table-hover table-mc-light-blue'>
                <thead>
                <tr>
                    <th>학수번호</th>
                    <th>교번</th>
                    <th>분반</th>
                    <th>개설년도</th>
                    <th>학기</th>
                    <th>교수</th>
                    <th>소속학과</th>
                    <th>과목명</th>
                    <th>개설학과</th>
                    <th>학점</th>
                    <th>열람</th>";       
            if($_SESSION['level'] > 1){
                echo "<th>삭제</th";
            }
            echo"</tr></thead><tbody>";
            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                echo "\t<tr>\n";
                foreach ($line as $col_value) {
                    echo "\t\t<td>$col_value</td>\n";
                }
                echo "<td><a href='./evaluation_page.php?course_id=" . $line['course_id'] . "&sec_id=" . $line['sec_id'] . "&year=" . $line['year'] . "&semester=" . $line['semester'] . "'><svg style='width:24px;height:24px' viewBox='0 0 24 24'>
                    <path fill='#757575' d='M19,2L14,6.5V17.5L19,13V2M6.5,5C4.55,5 2.45,5.4 1,6.5V21.16C1,21.41 1.25,21.66 1.5,21.66C1.6,21.66 1.65,21.59 1.75,21.59C3.1,20.94 5.05,20.5 6.5,20.5C8.45,20.5 10.55,20.9 12,22C13.35,21.15 15.8,20.5 17.5,20.5C19.15,20.5 20.85,20.81 22.25,21.56C22.35,21.61 22.4,21.59 22.5,21.59C22.75,21.59 23,21.34 23,21.09V6.5C22.4,6.05 21.75,5.75 21,5.5V7.5L21,13V19C19.9,18.65 18.7,18.5 17.5,18.5C15.8,18.5 13.35,19.15 12,20V13L12,8.5V6.5C10.55,5.4 8.45,5 6.5,5V5Z' />
                </svg></td>";
                if($_SESSION['level'] > 1){
                    echo "<td><a href='deleteSection.php?course_id=" . $line['course_id'] . "&sec_id=" . $line['sec_id'] . "&year=" . $line['year'] . "&semester=" . $line['semester'] . "'><svg style='width:24px;height:24px' viewBox='0 0 24 24'>
                        <path fill='#757575' d='M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8.46,11.88L9.87,10.47L12,12.59L14.12,10.47L15.53,11.88L13.41,14L15.53,16.12L14.12,17.53L12,15.41L9.88,17.53L8.47,16.12L10.59,14L8.46,11.88M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z' />
                    </svg></a></td>";
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";
        }
        else{
            echo "<script>alert('먼저 로그인해 주십시오!');history.back();</script>";
        }
    ?>
    </div>
    <div id="container-floating">
      <a href='./profAdd.php'>
      <div class="nd5 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder">
        <svg style="margin-left:8px;margin-top:8px;width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="#000000" d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z" />
        </svg>
      </div>
      </a>
      <div class="nd3 nds" data-toggle="tooltip" data-placement="left" data-original-title="Reminder">
        <svg style="margin-top:8px;margin-left:8px;width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
        </svg>
      </div>
      <div class="nd1 nds" data-toggle="tooltip" data-placement="left" data-original-title="Edoardo@live.it"><img class="reminder">
        <svg style="margin-top:8px;margin-left:8px;width:24px;height:24px" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M18,22H6A2,2 0 0,1 4,20V4C4,2.89 4.9,2 6,2H7V9L9.5,7.5L12,9V2H18A2,2 0 0,1 20,4V20A2,2 0 0,1 18,22M14,20H16V18H18V16H16V14H14V16H12V18H14V20Z" />
      </svg>
      </div>
      <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
        <p class="plus">+</p>
      </div>
    </div>
  </body>
  <script>
      $(document).ready(function() {

        var table = $('#table');

        // Table bordered
        $('#table-bordered').change(function() {
            var value = $( this ).val();
            table.removeClass('table-bordered').addClass(value);
        });

        // Table striped
        $('#table-striped').change(function() {
            var value = $( this ).val();
            table.removeClass('table-striped').addClass(value);
        });
    
        // Table hover
        $('#table-hover').change(function() {
            var value = $( this ).val();
            table.removeClass('table-hover').addClass(value);
        });

        // Table color
        $('#table-color').change(function() {
            var value = $(this).val();
            table.removeClass(/^table-mc-/).addClass(value);
        });
    });
  </script>
</html>
