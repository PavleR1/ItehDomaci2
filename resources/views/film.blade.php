@extends('master')

@section('title','Film')

<style>


a,
abbr,
acronym,
address,
applet,
article,
aside,
audio,
b,
big,
blockquote,
body,
canvas,
caption,
center,
cite,
code,
dd,
del,
details,
dfn,
div,
dl,
dt,
em,
embed,
fieldset,
figcaption,
figure,
footer,
form,
h1,
h2,
h3,
h4,
h5,
h6,
header,
hgroup,
html,
i,
iframe,
img,
ins,
kbd,
label,
legend,
li,
mark,
menu,
nav,
object,
ol,
output,
p,
pre,
q,
ruby,
s,
samp,
section,
small,
span,
strike,
strong,
sub,
summary,
sup,
table,
tbody,
td,
tfoot,
th,
thead,
time,
tr,
tt,
u,
ul,
var,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  vertical-align: baseline;
}
*,
:after,
:before {
  box-sizing: inherit;
}
body,
html {
  width: 100%;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  line-height: 1;
  font-size: 13px;
  font-weight: 300;
  display: table;
  table-layout: fixed;
  max-width: 1600px;
  height: auto;
  margin: auto !important;
  color: #fff;
  background: #1d1b24;
}
body,
input,
textarea {
  font-family: "Poppins", sans-serif;
}
h1,
h2,
h3,
h4,
p {
  line-height: 1.5em;
}
blockquote,
q {
  quotes: none;
}
blockquote:after,
blockquote:before,
q:after,
q:before {
  content: "";
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
html {
  height: 100%;
  background: #34495e;
  box-sizing: border-box;
}

body .sidebar,
body.overview #main {
  background: 0 0;
}

body .sidebar {
  position: relative;
  position: static;
  display: table-cell;
  top: 0;
  width: 100px;
  z-index: 40;
}
body .sidebar.sb-active {
  display: table-cell;
  z-index: 1;
}
body .sidebar nav {
  position: fixed;
  background: #151d26;
  width: 100px;
  height: inherit;
  top: 80px;
  z-index: 40;
}
h1 {
  font-size: 40px;
  font-weight: 700;
}
h3 {
  font-size: 24px;
  font-weight: 300;
}
a {
  text-decoration: none;
  transition: 0.3s ease;
}
input,
p,
textarea,
ul li {
  font-size: 14px;
}
strong {
  font-weight: 600;
}
ul {
  font-size: 0;
}
#content .item .item-details h2.movie-title,
.person .data .caracter,
.person .data .name {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.sweet-alert .popup-container button.cancel:before,
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.clearfix {
  content: "";
  display: table;
  clear: both;
}
.nofloat {
  float: none !important;
}
[class*=" icon-"]:before,
[class^="icon-"]:before {
  margin: 0;
}
.inner-container {
  width: 100%;
  max-width: 100%;
  margin: auto;
  padding: 0 30px;
}
#slogan {
  text-transform: uppercase;
  float: right;
  color: rgba(140, 139, 139, 0.7);
  font-size: 13px;
  margin-top: 16px;
}
.dropdown-toggle {
  cursor: pointer;
}
.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 100%;
}
.dropdown.open > .dropdown-menu {
  display: block;
}
.dropdown.open .dropdown-toggle i.icon-chevron-down:before {
  content: "\e683";
}
.dropdown,
body {
  position: relative;
}
#main,
.container,
body {
  min-height: 100%;
}
#serie-tv li,
ol,
ul {
  list-style: none;
}
.sb-toggle-left {
  display: none;
  padding: 13px 0;
  float: left;
  margin: 20px 20px 20px 0;
  cursor: pointer;
}
.sb-toggle-left .menu-icon-text {
  padding-left: 15px;
  font-weight: 600;
  text-transform: uppercase;
  vertical-align: middle;
}
.sb-toggle-left .menu-icon {
  position: relative;
  display: inline-block;
  width: 18px;
  height: 2px;
  background-color: #fff;
  margin-top: -1px;
  vertical-align: middle;
  z-index: 10;
}
#main,
#sidebar {
  vertical-align: top;
}
.sb-toggle-left .menu-icon:after,
.sb-toggle-left .menu-icon:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
}
.sb-toggle-left .menu-icon:before {
  -webkit-transform: translateY(-6px) rotate(0);
  -moz-transform: translateY(-6px) rotate(0);
  -ms-transform: translateY(-6px) rotate(0);
  -o-transform: translateY(-6px) rotate(0);
  transform: translateY(-6px) rotate(0);
}
.sb-toggle-left .menu-icon:after {
  -webkit-transform: translateY(6px) rotate(0);
  -moz-transform: translateY(6px) rotate(0);
  -ms-transform: translateY(6px) rotate(0);
  -o-transform: translateY(6px) rotate(0);
  transform: translateY(6px) rotate(0);
}
.sb-active .sb-toggle-left .menu-icon {
  background: 0 0;
}
.sb-active .sb-toggle-left .menu-icon:before {
  -webkit-transform: translateY(0) rotate(45deg);
  -moz-transform: translateY(0) rotate(45deg);
  -ms-transform: translateY(0) rotate(45deg);
  -o-transform: translateY(0) rotate(45deg);
  transform: translateY(0) rotate(45deg);
}
.sb-active .sb-toggle-left .menu-icon:after {
  -webkit-transform: translateY(0) rotate(-45deg);
  -moz-transform: translateY(0) rotate(-45deg);
  -ms-transform: translateY(0) rotate(-45deg);
  -o-transform: translateY(0) rotate(-45deg);
  transform: translateY(0) rotate(-45deg);
}
.mobile-nav ul li {
  display: block;
}
.mobile-nav ul li a {
  display: block;
  color: rgba(255, 255, 255, 0.7);
  padding: 21px 15px;
}
.mobile-nav ul li a:hover {
  color: #fff;
  background: rgba(0, 0, 0, 0.2);
}
.mobile-nav ul li a i {
  display: block;
  text-align: center;
  font-size: 24px;
  padding-bottom: 10px;
}
.mobile-nav ul li a span {
  display: block;
  text-align: center;
}
.mobile-nav ul li.active a {
  color: #fff;
  background: #298eea;
}
#sidebar {
  display: table-cell;
  background: #282c39;
  width: 180px;
  z-index: 100;
}
#sidebar .sidebar-inner {
  position: fixed;
  width: 200px;
  height: 100%;
}
#sidebar #sidebar-header {
  height: 80px;
  background: #ec403c;
}
#sidebar #sidebar-header .logo {
  display: block;
  line-height: 80px;
  padding: 0 20px;
}
#sidebar #sidebar-header .logo img {
  width: 50%;
  max-width: 100%;
}
#sidebar nav ul li {
  display: block;
}
#sidebar nav ul li a {
  display: block;
  color: rgba(255, 255, 255, 0.7);
  padding: 18px 20px;
}
#sidebar nav ul li.active a {
  color: #fff;
  background: rgba(0, 0, 0, 0.2);
}
#sidebar nav ul li a:hover {
  color: #fff;
}
#sidebar nav ul li a i {
  padding-right: 10px;
}
#sidebar nav ul li a i:before {
  margin: 0;
}
#site-container {
  display: table-cell;
  width: 100%;
  height: 100%;
}
#main {
  position: relative;
  display: block;
  background: #1d1b24;
  width: 100%;
}
#main #main-header {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  width: 100%;
  height: 80px;
  padding: 0;
  z-index: 100;
}
#main #main-header .inner-container {
  background: #282c39;
  max-width: 1600px;
  height: inherit;
}
#main #main-header .logo {
  float: left;
  padding: 28px 0;
  margin-right: 40px;
}
#main #main-header .main-nav {
  float: left;
}
#main #main-header .main-nav ul li {
  display: inline-block;
  padding: 23px 0;
}
#main #main-header .main-nav ul li a {
  display: inline-block;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.7);
  padding: 9px 25px;
  border-radius: 3px;
}
#main #main-header .main-nav ul li a i {
  padding-right: 10px;
}
#main #main-header .main-nav ul li.active a {
  color: #fff;
  background: #298eea;
}
#main #main-header .main-nav ul li a:hover {
  color: #fff;
}
#main #main-header .header-nav {
  position: relative;
  float: right;
  padding: 23px 0;
}
#main #main-header .header-nav li {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  vertical-align: top;
}
#main #main-header .header-nav li a {
  display: inline-block;
  color: #fff;
}
#main #main-header .header-nav .login a,
#main #main-header .header-nav .user-login a {
  color: #fff;
  padding: 8px 18px;
  border: 2px solid #fff;
  border-radius: 3px;
}
#main #main-header .header-nav .login a:hover,
#main #main-header .header-nav .user-login a:hover {
  color: #282c39;
  background: #fff;
}
#main #main-header .header-nav .login a i,
#main #main-header .header-nav .user-login a i {
  padding-right: 10px;
  line-height: 0;
}
#main #main-header .header-nav .register a {
  color: #fff;
  padding: 8px 18px;
  border: 2px solid rgba(255, 255, 255, 0.7);
  border-radius: 3px;
}
#main #main-header .header-nav .register a:hover {
  color: #282c39;
  background: #fff;
}
#main #main-header .header-nav .register a i {
  padding-right: 10px;
  line-height: 0;
}
#main #main-header .header-nav .user-normal .dropdown-toggle {
  color: rgba(255, 255, 255, 0.7);
  padding: 7px 10px;
}
#main #main-header .header-nav .user-normal .dropdown-toggle:hover {
  color: #fff;
}
#main #main-header .header-nav .user-normal .dropdown-toggle i {
  padding-right: 0;
}
#main #main-header .header-nav .user-normal .dropdown-toggle i:last-child {
  padding: 0 0 0 5px;
}
#main #main-header .header-nav .user-normal.active .dropdown-toggle,
#main #main-header .header-nav .user-normal.dropdown.open > .dropdown-toggle {
  color: #282c39;
  background: #fff;
}
#main #main-header .header-nav .user-normal ul {
  width: 170px;
  top: 50px;
  right: 0;
  left: auto;
  background: #fff;
  border-radius: 3px;
}
#main #main-header .header-nav .user-normal ul:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-color: transparent transparent #fff;
  border-top: 0;
  top: -6px;
  right: 22px;
  border-width: 6px;
}
#main #main-header .header-nav .user-normal ul li {
  display: block;
  padding: 0;
}
#main #main-header .header-nav .user-normal ul li a {
  display: block;
  color: #282c39;
  padding: 10px 20px;
}
#main #main-header .header-nav .user-normal ul li a:hover {
  background: rgba(0, 0, 0, 0.05);
}
#main #main-header .header-nav .user-normal ul li:first-child a:hover {
  border-radius: 3px 3px 0 0;
}
#main #main-header .header-nav .user-normal ul li:last-child a:hover {
  border-radius: 0 0 3px 3px;
}
#main #main-header .header-nav .user-normal ul li a i {
  padding-right: 10px;
}
#main #main-header .header-nav .user-normal ul li .username {
  display: block;
  color: #282c39;
  padding: 10px 20px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.07);
}
#main #main-header .header-nav .premium a {
  position: relative;
  color: #fff;
  background: #e67e22;
  font-weight: 700;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  display: inline-block;
  padding: 9px 20px 10px 55px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 3px;
  box-shadow: inset 0 -2px 0 rgba(0, 0, 0, 0.3), 0 0 10px rgba(0, 0, 0, 0.1);
}
#main #main-header .header-nav .premium a i {
  position: absolute;
  top: 0;
  left: 0;
  padding: 8px 10px 12px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 3px 0 0 3px;
}
#main #main-header .header-nav .premium a:hover {
  background: #f39c12;
  box-shadow: inset 0 -2px 0 rgba(0, 0, 0, 0.3), 0 5px 10px rgba(0, 0, 0, 0.2);
}
#main #main-header .header-nav .contact a {
  position: relative;
  display: inline-block;
  color: rgba(255, 255, 255, 0.5);
  padding: 8px 20px 8px 43px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 3px;
  transition: none;
}
#main #main-header .header-nav .contact a i {
  position: absolute;
  top: 50%;
  margin-top: -7px;
  left: 20px;
  color: rgba(255, 255, 255, 0.5);
  padding-right: 10px;
  vertical-align: text-top;
}
#main #main-header .header-nav .contact a:hover {
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
  border-color: #fff;
}
#main #main-header .header-nav .contact a:hover > i {
  color: #fff;
  border-color: #fff;
  transition: none;
}
#content.contact {
  text-align: center;
}
#contactform {
  width: 600px;
  margin: 20px auto 0 auto;
  text-align: left;
}
#contactform fieldset p {
  position: relative;
  margin-bottom: 20px;
}
#contactform label {
  position: absolute;
  top: 15px;
  left: 20px;
  font-size: 0;
}
#contactform label i {
  font-size: 14px;
}
#contactform input[type="text"],
#contactform textarea {
  color: #fff;
  background: #282c39;
  padding: 15px 20px 15px 50px;
  border: none;
  outline: none;
}
#contactform input[type="text"]:focus,
#contactform textarea:focus {
  background: #2f3444;
}
#contactform input[type="text"]:focus + label,
#contactform textarea:focus + label {
  color: #fff;
}
#contactform textarea {
  width: 100%;
  height: 200px;
}
#contactform input[type="submit"] {
  padding: 16px 25px;
}
.dmca {
  max-width: 80%;
  color: rgba(255, 255, 255, 0.7);
  padding: 40px 0;
  margin: auto;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
.dmca h4 {
  font-size: 20px;
  margin-bottom: 20px;
}
.dmca p {
  padding-bottom: 15px;
}
.dmca ul {
  display: table;
  list-style-position: inside;
  margin-bottom: 15px;
}
.dmca ul li {
  display: table-row;
  line-height: 1.5em;
}
.dmca ul li::before {
  display: table-cell;
  content: "-";
  padding-right: 10px;
}
#main #header-secondary {
  position: fixed;
  left: 0;
  right: 0;
  top: 80px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
  z-index: 30;
}
#main #header-secondary .inner-container {
  max-width: 1600px;
  height: inherit;
  background: #2f3444;
  padding-left: 130px;
}
#main #header-secondary .filters {
  float: left;
}
#main #header-secondary .filters ul {
  line-height: 1;
}
#main #header-secondary .filters > ul > li {
  position: relative;
  display: inline-block;
  background: #282c39;
  line-height: 30px;
  margin: 9px 10px 9px 0;
  border-radius: 3px;
  vertical-align: top;
}
#main #header-secondary .filters ul li .dropdown-toggle i,
#main #header-secondary .filters ul li form i {
  vertical-align: text-top;
}
#main #header-secondary .filters ul li a {
  color: #fff;
}
#main #header-secondary .filters ul li .dropdown-toggle {
  color: rgba(255, 255, 255, 0.7);
  display: inline-block;
  padding: 0 15px;
  cursor: pointer;
}
#main #header-secondary .filters ul li .dropdown-toggle .value,
#main #header-secondary .filters ul li .dropdown-toggle i {
  color: #fff;
  padding-left: 5px;
}
#main #header-secondary .filters ul li .dropdown-toggle .value {
  display: inline-block;
  text-transform: capitalize;
  padding-left: 10px;
}
#main #header-secondary .filters ul li form {
  padding: 0 15px;
}
#main #header-secondary .filters ul li form input {
  color: #fff;
  border: none;
  outline: 0;
  background: 0 0;
  -webkit-appearance: none;
}
#main #header-secondary .filters ul li.open.abc-filter ul {
  display: block;
  width: 360px;
}
#main #header-secondary .filters ul li.open.abc-filter ul li {
  float: left;
  width: 40px;
  line-height: 40px;
  text-align: center;
  text-transform: uppercase;
  padding: 0;
  border: none;
}
#main #header-secondary .filters ul li ul li a {
  color: rgba(255, 255, 255, 0.7);
  display: block;
}
.detail #content .movie-info em.tagline {
  display: inline-block;
  font-size: 12px;
  margin-top: -10px;
  margin-left: 50px;
  margin-right: 15px;
  color: rgba(255, 255, 255, 0.71);
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}
.detail #content .movie-info em.tagline i {
  margin-right: 10px;
}
#main #header-secondary .filters ul li ul li a:hover {
  color: #fff;
}
#main #header-secondary .filters ul li.dropdown.open > ul {
  display: block;
  margin-top: 11px;
  padding: 15px;
  background: #282c39;
  border-radius: 0 0 3px 3px;
  box-sizing: content-box;
}
#main #header-secondary .filters ul ul li:first-child {
  border: none;
}
#main #header-secondary .filters ul ul li {
  display: block;
  padding: 0 15px;
  line-height: 35px;
  color: rgba(255, 255, 255, 0.7);
  background: #282c39;
  white-space: nowrap;
  cursor: pointer;
}
#main #header-secondary .filters ul > ul > li:last-child {
  border-radius: 0 0 3px 3px;
}
#main #header-secondary .filters ul ul li.active,
#main #header-secondary .filters ul ul li:hover {
  color: #fff;
  background: rgba(0, 0, 0, 0.1);
}
#main #header-secondary .filters ul ul li input[type="checkbox"] {
  display: none;
}
#main #header-secondary .filters ul ul li input[type="checkbox"] + label {
  position: relative;
  padding-left: 20px;
  cursor: pointer;
}
#main #header-secondary .filters ul ul li input[type="checkbox"] + label:hover,
#main
  #header-secondary
  .filters
  ul
  ul
  li
  input[type="checkbox"]:checked
  + label {
  color: #fff;
}
#main
  #header-secondary
  .filters
  ul
  ul
  li
  input[type="checkbox"]
  + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  margin-top: -5px;
  width: 10px;
  height: 10px;
  background: #2f3444;
  border-radius: 2px;
}
#main
  #header-secondary
  .filters
  ul
  ul
  li
  input[type="checkbox"]:checked
  + label:after {
  content: "\e6f2";
  font-family: moviewp;
  font-size: 14px;
  line-height: 1;
  color: #2ecc71;
  position: absolute;
  left: -1px;
  top: 50%;
  margin-top: -9px;
}
#main #header-secondary .filters ul li.dropdown.open > ul.dropdown-menu-large {
  width: 500px;
  background: #282c39;
  padding: 15px;
  box-sizing: content-box;
  border-radius: 0 0 3px 3px;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li {
  display: inline-block;
  width: calc(100% / 3);
  line-height: 1;
  padding: 0;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  input[type="checkbox"]
  + label {
  display: block;
  line-height: 35px;
  padding: 0 15px 0 35px;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  input[type="checkbox"]
  + label:hover:before {
  background: #298eea;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  input[type="checkbox"]
  + label:before {
  content: "";
  position: absolute;
  left: 15px;
  top: 50%;
  margin-top: -5px;
  width: 10px;
  height: 10px;
  background: #2f3444;
  border-radius: 2px;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  input[type="checkbox"]:checked
  + label:after {
  content: "\e6f2";
  font-family: moviewp;
  font-size: 14px;
  line-height: 1;
  color: #2ecc71;
  position: absolute;
  left: 14px;
  top: 50%;
  margin-top: -9px;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  a {
  display: block;
  line-height: 35px;
  padding: 0 15px 0 35px;
  position: relative;
  cursor: pointer;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  a:before {
  content: "";
  position: absolute;
  left: 15px;
  top: 50%;
  margin-top: -5px;
  width: 10px;
  height: 10px;
  background: #2f3444;
  border-radius: 2px;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li
  a:hover:before,
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li.current-cat
  a:before {
  background: #298eea;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large
  li.current-cat
  a {
  color: #fff;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large.abc
  li
  a:hover:before,
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large.abc
  li.current-cat
  a:before {
  background: #c054c1;
}
#main
  #header-secondary
  .filters
  ul
  li.dropdown.open
  > ul.dropdown-menu-large.abc {
  width: 200px;
}
#main #header-secondary .sort {
  float: right;
}
#main #header-secondary .sort ul {
  line-height: 1;
}
#main #header-secondary .sort ul li {
  display: inline-block;
}
#main #header-secondary .sort ul li div {
  display: inline-block;
  color: #fff;
  padding: 14px 15px;
  cursor: pointer;
}
#main #header-secondary .sort ul li.active div {
  background: #1d1b24;
}
#main #header-secondary .sort ul li div i {
  font-size: 20px;
}
#content {
  position: relative;
  font-size: 0;
  width: 100%;
  padding-top: 30px;
  padding-bottom: 100px;
  margin-top: 130px;
}
#content .item-container {
  margin: 0 -10px;
}
.tvshow i {
  font-style: normal !important;
}
#content .item {
  opacity: 0;
  transform: scale(0.3);
  transition: all 0.3s ease-in-out;
  position: relative;
  font-size: 15px;
  display: inline-block;
  width: calc(100% / 8);
  padding: 10px;
  text-align: left;
  -webkit-perspective: 1000;
  -moz-perspective: 1000;
  -ms-perspective: 1000;
  perspective: 1000px;
  -ms-transform: perspective(1000px);
  -moz-transform: perspective(1000px);
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
}
#content .item-flip {
  -webkit-transition: 0.6s;
  -webkit-transform-style: preserve-3d;
  -ms-transition: 0.6s;
  -moz-transition: 0.6s;
  -moz-transform: perspective(1000px);
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transition: 0.6s;
  transform-style: preserve-3d;
  position: relative;
}
#content .item .item-details,
#content .item .item-inner {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: 0.6s;
  -webkit-transform-style: preserve-3d;
  -webkit-transform: rotateY(0);
  -moz-transition: 0.6s;
  -moz-transform-style: preserve-3d;
  -moz-transform: rotateY(0);
  -o-transition: 0.6s;
  -o-transform-style: preserve-3d;
  -o-transform: rotateY(0);
  -ms-transition: 0.6s;
  -ms-transform-style: preserve-3d;
  -ms-transform: rotateY(0);
  transition: 0.6s;
  transform-style: preserve-3d;
  transform: rotateY(0);
}
#content .item .item-inner {
  position: relative;
  z-index: 2;
  -webkit-transform: rotateY(0);
  -ms-transform: rotateY(0);
  transform: rotateY(0);
}
#content .item .item-inner .movie-options {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 0;
  opacity: 0;
  transition: 0.3s ease;
  z-index: 20;
}
#content .item .item-inner .movie-options i {
  color: rgba(255, 255, 255, 0.5);
  display: inline-block;
  font-size: 20px;
  padding: 10px;
}
#content .item .item-inner .movie-options .watchlist-add i:hover:before {
  color: #fff;
}
#content .item .item-inner .movie-options .favorites-add i:hover:before {
  color: #fff;
  content: "\e77d";
}
#content .item .item-inner .movie-options .favorites-add,
#content .item .item-inner .movie-options .favorites-remove,
#content .item .item-inner .movie-options .watchlist-add,
#content .item .item-inner .movie-options .watchlist-remove {
  display: inline-block;
  position: absolute;
  top: 0;
  z-index: 20;
}
#content .item .item-inner .movie-options .favorites-add:hover,
#content .item .item-inner .movie-options .favorites-remove:hover,
#content .item .item-inner .movie-options .watchlist-add:hover,
#content .item .item-inner .movie-options .watchlist-remove:hover {
  cursor: pointer;
}
#content .item .item-inner .movie-options .watchlist-add {
  left: 0;
}
#content .item .item-inner .movie-options .favorites-add {
  right: 0;
}
#content .item .item-inner .movie-options .favorites-remove,
#content .item .item-inner .movie-options .watchlist-remove {
  opacity: 0;
  top: 0;
  left: 0;
  right: 0;
  padding-left: 30px;
  background: #ec403c;
  text-align: center;
  border-radius: 3px 3px 0 0;
  transition: 0.3s ease;
}
#content .item .item-inner .movie-options .favorites-remove:hover > i,
#content .item .item-inner .movie-options .favorites-remove:hover > span,
#content .item .item-inner .movie-options .watchlist-remove:hover > i,
#content .item .item-inner .movie-options .watchlist-remove:hover > span {
  color: #fff;
}
#content .item .item-inner .movie-options .favorites-remove i,
#content .item .item-inner .movie-options .watchlist-remove i {
  position: absolute;
  left: 0;
  padding: 4px 5px 6px;
  color: #fff;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 3px 0 0 3px;
}
#content .item .item-inner .movie-options .favorites-remove span,
#content .item .item-inner .movie-options .watchlist-remove span {
  display: inline-block;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  line-height: 30px;
  vertical-align: top;
}
#content .item .item-inner .movie-options .active i,
#content .item .item-inner .movie-options .active i:hover:before {
  color: #298eea;
}
#content .item .item-inner a {
  position: relative;
  display: block;
  transition: 0.3s ease;
}
#content .item .item-inner a .movie-play {
  opacity: 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  transition: 0.3s ease;
  z-index: 10;
}
#content .item .item-inner a .movie-play i {
  position: absolute;
  top: 50%;
  margin-top: -24px;
  left: 50%;
  margin-left: -24px;
  color: #fff;
  display: inline-block;
  font-size: 20px;
  text-align: center;
  width: 48px;
  line-height: 44px;
  border: 2px solid #fff;
  border-radius: 50%;
}
.detail #content .movie-info .movie-data span:first-child:before,
.imdb-rating:hover:before {
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid #2f3444;
}
#content .item .item-inner a img,
#content .item .item-inner:hover > .movie-options,
#content .item .item-inner:hover > .movie-options > .favorites-remove,
#content .item .item-inner:hover > .movie-options > .watchlist-remove,
#content .item .item-inner:hover > a > .movie-play {
  opacity: 1;
  transition: 0.3s ease;
}
#content .item .item-inner:hover > a > img {
  opacity: 0.2;
  transition: 0.3s ease;
}
#content .item .item-inner img {
  max-width: 100%;
  border-radius: 3px;
}
#content .item .item-inner .imdb-rating {
  font-size: 16px;
}
#content .item .item-inner .movie-date {
  color: rgba(255, 255, 255, 0.7);
  font-size: 16px;
}
#content .item .item-details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: auto;
  height: auto;
  -webkit-transform: rotateY(-180deg);
  -moz-transform: rotateY(-180deg);
  -o-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  border-radius: 4px;
}
#content .item-flip:hover .item-inner {
  -webkit-transform: rotateY(180deg);
  -moz-transform: rotateY(180deg);
  -o-transform: rotateY(180deg);
  transform: rotateY(180deg);
}
#content .item-flip:hover .item-details {
  -webkit-transform: rotateY(0);
  -moz-transform: rotateY(0);
  -o-transform: rotateY(0);
  -ms-transform: rotateY(0);
  transform: rotateY(0);
}
#content .item .item-details .item-details-inner {
  display: block;
  height: 100%;
  padding: 20px;
  background: #1d1b24;
  border-radius: 4px;
  overflow: hidden;
}
#content .item .item-details:hover {
  display: block;
}
#content .item .item-details h2.movie-title {
  color: #fff;
  font-size: 18px;
  font-weight: 600;
  padding-bottom: 15px;
}
#content .item .item-details .movie-description {
  font-size: 15px;
  color: rgba(255, 255, 255, 0.7);
  height: 7.5em;
  overflow: hidden;
}
#content .item .item-details .imdb-rating {
  position: relative;
  float: left;
  color: rgba(255, 255, 255, 0.7);
  padding-left: 10px;
  padding-bottom: 10px;
  z-index: 1;
}
#content .item .item-details .imdb-rating i {
  padding-right: 5px;
}
#content .item .item-details .imdb-rating i.fa {
  color: #febf15;
}
#content .item .item-details span.movie-date {
  position: relative;
  float: right;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.7);
  padding-top: 1px;
  padding-right: 10px;
  z-index: 1;
}
#content .item .item-details .watch-btn {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  font-weight: 600;
  text-align: center;
  padding: 70px 10px 10px;
  border-radius: 0 0 4px 4px;
  background: -moz-linear-gradient(
    top,
    rgba(29, 27, 36, 0) 0,
    rgba(29, 27, 36, 1) 40%,
    rgba(29, 27, 36, 1) 100%
  );
  background: -webkit-linear-gradient(
    top,
    rgba(29, 27, 36, 0) 0,
    rgba(29, 27, 36, 1) 40%,
    rgba(29, 27, 36, 1) 100%
  );
  background: linear-gradient(
    to bottom,
    rgba(29, 27, 36, 0) 0,
    rgba(29, 27, 36, 1) 40%,
    rgba(29, 27, 36, 1) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#001d1b24', endColorstr='#1d1b24', GradientType=0);
}
#content .item .item-details .watch-btn span:last-child {
  display: block;
  color: #fff;
  background: #298eea;
  line-height: 40px;
  border-radius: 4px;
  clear: both;
}
.imdb-rating {
  position: relative;
  display: inline-block;
  padding-bottom: 5px;
}
.imdb-rating i {
  margin-left: -2px;
}
.imdb-rating i:before {
  margin: 0;
}
.imdb-rating i.icon-star-o,
.imdb-rating i.icon-star-outlined {
  color: rgba(255, 255, 255, 0.5);
}
.imdb-rating i.icon-star-half-empty,
.imdb-rating i.icon-star-o,
.imdb-rating i.icon-star2 {
  font-size: 12px;
  margin: 0 2px 0 0;
}
#content .item.remove {
  opacity: 0;
  width: 0;
  padding: 0;
}
#content .item.remove .item-details {
  opacity: 0;
}
.imdb-rating:hover:before {
  display: block;
  content: "";
  position: absolute;
  bottom: 23px;
  left: 50%;
  margin-left: -7px;
  margin-top: 6px;
  z-index: 15;
}
.imdb-rating:hover:after {
  content: attr(data-content);
  position: absolute;
  color: #fff;
  background: #2f3444;
  font-size: 14px;
  line-height: 1;
  padding: 8px 12px;
  width: 46px;
  text-align: center;
  bottom: 100%;
  margin-bottom: 10px;
  left: 50%;
  margin-left: -24px;
  border-radius: 3px;
  z-index: 10;
}
#main.listview .item {
  width: 50%;
}
#main.listview .item .item-inner {
  display: block;
  width: 100%;
  font-size: 0;
  background: rgba(255, 255, 255, 0.03);
  border-radius: 3px;
}
#main.listview .item .item-inner a {
  display: inline-block;
  width: 130px;
}
#main.listview .item .item-inner a img {
  border-radius: 3px 0 0 3px;
}
#main.listview .item .item-details {
  display: inline-block;
  width: calc(100% - 130px);
  vertical-align: top;
  padding: 20px 30px;
}
#main.listview .item .item-details h2.movie-title {
  display: block;
  font-size: 18px;
  padding-top: 0;
}
.detail #main {
  overflow: hidden;
}
.detail #main #video {
  position: relative;
  width: 100%;
  max-width: 1000px;
  margin: 30px auto 0;
  z-index: 1;
}
.detail #content .movie-image img,
.table {
  max-width: 100%;
}
.detail #content,
.detail.show-detail #content {
  margin-top: 80px;
}
.detail #content .movie-actions,
.detail #content .movie-image,
.detail #content .movie-info {
  position: relative;
  z-index: 10;
}
.detail #content .movie-image {
  width: 15%;
  display: inline-block;
}
.detail #content .movie-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.3;
  background-size: cover;
  background-repeat: no-repeat;
}
.detail #content .movie-info {
  width: 60%;
  display: inline-block;
  vertical-align: top;
  padding: 0 30px;
}
.detail-tvshow #content {
  padding-bottom: 30px;
}
.detail-tvshow #content .movie-info {
  width: 85%;
}
.detail #content .movie-info h1 {
  font-size: 36px;
  line-height: 1;
  padding-bottom: 15px;
}
.detail #content .movie-info .movie-data {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.7);
  padding-bottom: 20px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}
.detail #content .movie-info .movie-data span:before {
  content: "";
  width: 2px;
  height: 2px;
  margin: 0 10px;
  background: rgba(255, 255, 255, 0.3);
  vertical-align: middle;
}
.detail #content .movie-info .movie-data span:first-child:before {
  visibility: hidden;
  content: "";
  position: absolute;
  background: 0 0;
  bottom: 23px;
  left: 50%;
  margin-left: -7px;
  margin-top: 6px;
  z-index: 15;
}
.detail #content .movie-info .movie-data span i {
  padding-right: 1px;
}
.detail #content .movie-info .movie-data .imdb-rating {
  position: relative;
}
.detail #content .movie-info .movie-data .imdb-rating i {
  padding: 0;
  margin: 0 2px 0 0;
}
.detail #content .movie-info .movie-data .imdb-rating:hover:before {
  visibility: visible;
}
.detail #content .movie-info .movie-data .imdb-rating:after {
  margin-bottom: 13px;
}
.detail #content .movie-info .movie-data .movie-trailer a {
  color: rgba(255, 255, 255, 0.7);
}
.detail #content .movie-info .movie-data .movie-trailer a:hover {
  color: #fff;
}
.detail #content .movie-info p {
  color: rgba(255, 255, 255, 0.71);
  font-size: 16px;
  line-height: 1.5em;
  padding-top: 20px;
}
.detail #content .movie-info .movie-details p a {
  color: #298eea;
}
.detail .movie-actions {
  display: inline-block;
  width: 25%;
  vertical-align: top;
}
.detail .tv-details .movie-actions {
  display: block;
  width: 100%;
  margin: 30px 0;
}
#play-button > div > em,
#streaming-3d > span > em,
#videoplayer1 > span > em,
#videoplayer2 > span > em,
#videoplayer > span > em {
  margin-left: 5px;
  font-style: italic;
  font-size: 18px;
  font-weight: 700;
}
#play-button > a > em,
#streaming-3d > span > em,
#videoplayer1 > span > em,
#videoplayer2 > span > em,
#videoplayer > span > em {
  margin-left: 5px;
  font-style: italic;
  font-size: 18px;
  font-weight: 700;
}
#videoplayer1 {
  border-radius: 0 0 5px 5px;
}
a#videoplayer1.blue {
  border-radius: 0 0 5px 5px;
}
#videoplayer2 {
  border-radius: 0 0 5px 5px;
}
.detail .movie-actions .play {
  position: relative;
  color: #fff;
  background: #c054c1;
  padding: 18px 25px;
  border-radius: 5px;
  cursor: pointer;
}
.detail .movie-actions .play:hover {
  background: #c062c1;
  color: #fff;
}
.detail .movie-actions #subtitle-button {
  display: block;
}
.detail .movie-actions #subtitle-button #subfile {
  display: none;
}
.detail .movie-actions #subtitle-button label:hover {
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
  border-color: #fff;
}
.detail .tv-details .movie-actions ul:first-child {
  padding-right: 15px;
}
.detail .tv-details .movie-actions ul:last-child {
  padding-left: 15px;
}
.detail .movie-actions > ul:first-child {
  margin-bottom: 30px;
}
.detail .movie-actions ul > li > .btn-alt {
  display: block;
  padding: 0;
  border: none;
}
#streaming-3d > div > a > span,
#videoplayer1 > span,
#videoplayer2 > span,
#videoplayer > span {
  color: #fff;
}
#videoplayer2 {
  display: none;
}
.detail .movie-actions ul > li > .btn-alt > a {
  display: block;
  color: rgba(255, 255, 255, 0.7);
  padding: 8px 20px;
  border: 2px solid rgba(255, 255, 255, 0.7);
  border-radius: 3px;
  transition: none;
}
.detail .movie-actions ul > li > .btn-alt > a:hover {
  color: #fff;
  border-color: #fff;
  transition: none;
}
.detail .movie-actions ul > li a {
  color: rgba(255, 255, 255, 0.7);
  padding: 16px 20px 16px 68px;
  display: block;
}
.detail .movie-actions ul li .dropdown-toggle {
  padding: 9px 20px;
  color: rgba(255, 255, 255, 0.7);
  border: 2px solid rgba(255, 255, 255, 0.7);
  border-radius: 3px;
  cursor: pointer;
  min-width: 240px;
}
.detail .movie-actions ul ul {
  display: none;
}
.detail .movie-actions ul li .dropdown-toggle:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(255, 255, 255, 0.1);
}
.detail .movie-actions ul li.open .dropdown-toggle {
  color: #282c39;
  background: #fff;
  border-color: #fff;
  border-radius: 3px 3px 0 0;
}
.tv-details-episodes ol li.active:after,
.tv-details-seasons ol li.active:after {
  content: "";
  right: -30px;
  border-color: transparent transparent transparent #298eea;
  border-style: solid;
  border-width: 20px 15px;
  top: 0;
}
.detail .movie-actions .extra li:first-child,
.detail .movie-actions ul li#subtitles {
  border-radius: 5px 5px 0 0;
}
.detail .movie-actions ul li.open ul {
  display: block;
  z-index: 10;
}
.detail .movie-actions ul ul li {
  min-width: 100%;
  padding: 10px 20px;
  color: rgba(255, 255, 255, 0.7);
  background: #2f3444;
  cursor: pointer;
}
.detail .movie-actions ul ul li:hover {
  color: #fff;
  background: #282c39;
}
.detail .movie-actions .extra {
  margin: auto;
}
.detail .movie-actions .extra li {
  text-align: left;
  display: block;
}
.detail .movie-actions .extra li:last-child {
  border-radius: 0 0 5px 5px;
}
.detail .movie-actions .extra li div {
  padding: 16px 20px 16px 68px;
  cursor: pointer;
}
.detail .movie-actions .extra li div:hover {
  color: #fff;
  background: rgba(0, 0, 0, 0.1);
}
.detail .movie-actions .extra li .download {
  padding: 0;
}
.detail .movie-actions .extra li i {
  position: absolute;
  top: 0;
  left: 0;
  padding: 16px;
  background: rgba(0, 0, 0, 0.1);
}
.detail #content .movie-info .movie-actions ul li#server-button i {
  float: right;
  padding-left: 5px;
}
.detail #content .movie-info .movie-actions ul li#server-button .server-type {
  font-size: 12px;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
  padding-left: 5px;
}
.detail
  #content
  .movie-info
  .movie-actions
  ul
  li#server-button.open
  > .dropdown-toggle
  .server-type {
  color: #282c39;
}
.detail #content .movie-info .movie-actions ul li#server-button .server-load {
  float: right;
}
.tv-details {
  position: relative;
  font-size: 0;
  margin-top: 30px;
  z-index: 10;
}
.tv-details ol li.active {
  color: #fff;
  background: #298eea;
}
.tv-details ol li.active:before {
  color: #fff;
}
.tv-details-episodes,
.tv-details-episodes-info,
.tv-details-seasons {
  display: inline-block;
  font-size: 14px;
  vertical-align: top;
}
.tv-details-episodes h2,
.tv-details-episodes-info h2,
.tv-details-seasons h2 {
  font-size: 24px;
  padding-bottom: 20px;
}
.tv-details-seasons {
  width: 20%;
  padding-right: 20px;
}
.tv-details-seasons ol {
  position: relative;
  max-height: 340px;
  padding-left: 10px;
  padding-right: 15px;
  margin-left: -10px;
}
.tv-details-seasons ol li {
  position: relative;
  color: rgba(255, 255, 255, 0.7);
  background: #2f3444;
  padding: 13px 15px;
  cursor: pointer;
}
.tv-details-seasons ol li:nth-child(odd) {
  background: #282c39;
}
.tv-details-seasons ol li.active {
  color: #fff;
  background: #298eea;
}
.tv-details-seasons ol li.active:after {
  position: absolute;
}
.tv-details-seasons ol li:hover {
  color: #fff;
}
.tv-details-episodes {
  width: 40%;
  padding: 0 20px;
}
.tv-details-episodes ol {
  position: relative;
  display: none;
  max-height: 340px;
  padding-left: 10px;
  padding-right: 15px;
  margin-left: -10px;
  overflow: hidden;
}
.tv-details-episodes ol.active {
  display: block;
}
.tv-details-episodes ol li {
  position: relative;
  color: rgba(255, 255, 255, 0.7);
  background: #2f3444;
  padding: 13px 15px 13px 55px;
  counter-increment: listcounter;
  cursor: pointer;
}
.tv-details-episodes ol li.active:after {
  position: absolute;
}
.tv-details-episodes ol li:before {
  content: counter(listcounter) " ";
  font-size: 14px;
  color: rgba(255, 255, 255, 0.7);
  background: rgba(0, 0, 0, 0.1);
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 40px;
  line-height: 40px;
  text-align: center;
  border-right: 1px solid rgba(0, 0, 0, 0.1);
}
.tv-details-episodes ol li:nth-child(odd) {
  background: #282c39;
}
.tv-details-episodes ol li:nth-child(odd).active {
  background: #298eea;
}
.tv-details-episodes ol li:hover {
  color: #fff;
}
.tv-details-episodes-info {
  width: 40%;
  padding-left: 20px;
  font-size: 0;
}
.tv-details-episodes-info p {
  display: inline-block;
  width: 75%;
  padding-left: 20px;
  vertical-align: top;
}
.tv-details-episodes-info .playepisode {
  position: relative;
  display: inline-block;
  font-size: 14px;
  color: #fff;
  background: #298eea;
  padding: 13px 25px 13px 60px;
  margin-top: 30px;
  border-radius: 3px;
  cursor: pointer;
}
.tv-details-episodes-info .playepisode i {
  position: absolute;
  top: 0;
  left: 0;
  padding: 13px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 3px 0 0 3px;
}
.alert {
  font-size: 14px;
  padding-top: 20px;
  font-weight: 600;
}
.alert-danger {
  color: #e74c3c;
}
.table {
  display: table;
  width: 300px;
  margin: 60px auto;
  font-size: 0;
}
.table .row {
  display: table-row;
}
.table .row > div {
  display: table-cell;
  width: 33.33%;
  padding: 17px 20px;
}
.table .table-body,
.table .table-footer,
.table .table-header {
  display: table;
  width: 100%;
}
.table .table-header .row > div {
  font-size: 14px;
  vertical-align: bottom;
  padding: 30px 0;
}
.table .table-header .row > div:last-child {
  background: #298eea;
}
.table .table-header .row > div .time {
  font-size: 18px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.7);
}
.table .table-header .row > div .price {
  font-size: 36px;
  font-weight: 700;
  padding: 15px;
}
.table .table-header .row > div .mostpopular {
  font-weight: 600;
  background: #1d82dc;
  padding: 15px 0;
  margin: 20px 0 -30px;
}
.table .table-header .row > div .discount {
  background: rgba(0, 0, 0, 0.2);
  padding: 15px 0;
  margin: 20px 0 -30px;
}
.table .table-body .row {
  background: #282c39;
}
.table .table-body .row:nth-child(odd) {
  background: #242833;
}
.table .table-body .row > div {
  font-size: 14px;
  padding: 17px 20px;
}
.table .table-body .row > div:first-child {
  text-align: left;
}
#buttonposter > p,
#content.login,
#spinner,
.AZList,
.detail #content.profile,
.md-content h3,
.notice div i,
.pagination,
.pagination a,
.pagination span,
.profile i,
.rating,
p#buttondownload,
span.top-number {
  text-align: center;
}
.table .table-body .row > div:last-child {
  border: 4px solid #298eea;
  border-width: 0 4px;
}
.table .table-body .row > div i {
  padding-right: 8px;
}
#content.favorites,
#content.watchlist {
  margin-top: 80px;
}
#content.favorites h1,
#content.watchlist h1 {
  padding-left: 10px;
}
#content.login form {
  width: 60%;
  margin: auto;
}
#content.login form input[type="submit"] {
  width: 100%;
}
.profile h1 {
  padding-bottom: 20px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}
.profile i {
  font-size: 64px;
  color: #fff;
  position: relative;
  background: #298eea;
  display: block;
  width: 80px;
  margin: 30px auto;
  padding: 16px 0 0;
  border-radius: 50%;
  border: 15px solid #1d1b24;
  box-sizing: content-box;
  overflow: hidden;
}
.user-info {
  display: inline-block;
  padding: 80px 80px 60px;
  background: #282c39;
  border-radius: 3px;
  margin-top: -65px;
}
.user-info h3 {
  line-height: 1;
}
.user-info ul {
  padding-top: 15px;
}
.user-info ul li {
  line-height: 1.5em;
}
.user-settings {
  display: block;
  padding-top: 30px;
}
.btn-alt {
  font-size: 14px;
  display: inline-block;
  padding: 8px 20px;
  color: rgba(255, 255, 255, 0.7);
  border: 2px solid rgba(255, 255, 255, 0.7);
  border-radius: 3px;
  cursor: pointer;
}
.btn-alt i {
  padding-right: 10px;
}
.btn-alt:hover {
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
  border-color: #fff;
}
.btn-alt a {
  color: rgba(255, 255, 255, 0.7);
}
.btn-alt a:hover {
  color: #fff;
}
.sa-button-container {
  display: none;
}
.popup-container p {
  padding: 30px 20px 20px;
}
.popup-container p:first-child {
  padding-top: 0;
}
.sweet-alert .popup-container button.cancel {
  position: absolute;
  top: 0;
  right: 0;
  color: #aaa;
  background: #fff;
  font-size: 28px;
  width: 40px;
  line-height: 40px;
  padding: 0;
}
.sweet-alert .popup-container button.cancel:hover {
  color: initial;
  background: initial;
}
.sweet-alert .popup-container button.cancel:before {
  content: "\e6f1";
  font-family: moviewp;
  speak: none;
  font-style: normal;
  font-weight: 400;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
}
.download a span em,
i.hd,
span.hd {
  font-style: italic;
}
.getpremium {
  position: relative;
  display: block;
  width: 75%;
  color: #fff;
  background: #e67e22;
  font-weight: 700;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  padding: 11px 20px 12px;
  margin: auto;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 3px;
  box-shadow: inset 0 -2px 0 rgba(0, 0, 0, 0.3), 0 0 10px rgba(0, 0, 0, 0.1);
}
.getpremium:hover {
  background: #f39c12;
  box-shadow: inset 0 -2px 0 rgba(0, 0, 0, 0.3), 0 5px 10px rgba(0, 0, 0, 0.2);
}
.getpremium i {
  position: absolute;
  top: 0;
  left: 0;
  padding: 13px 15px 14px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 3px 0 0 3px;
}
#disqus_thread a {
  color: #fff;
}
.md-perspective,
.md-perspective body {
  height: 100%;
  overflow: hidden;
}
.md-perspective body {
  background: #222;
  -webkit-perspective: 600px;
  -moz-perspective: 600px;
  perspective: 600px;
}
.container {
  background: #e74c3c;
}
.md-modal {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 50%;
  max-width: 630px;
  min-width: 320px;
  height: auto;
  z-index: 2000;
  visibility: hidden;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
.md-show {
  visibility: visible;
}
.md-overlay {
  position: fixed;
  width: 100%;
  height: 100%;
  visibility: hidden;
  top: 0;
  left: 0;
  z-index: 1000;
  opacity: 0;
  background: rgba(52, 54, 66, 0.9);
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}
.md-show ~ .md-overlay {
  opacity: 1;
  visibility: visible;
}
.md-content {
  color: #666;
  background: #fff;
  position: relative;
  border-radius: 3px;
  margin: 0 auto;
}
.md-content h3 {
  margin: 0;
  padding: 0.4em;
  font-size: 2.4em;
  font-weight: 300;
  opacity: 0.8;
  background: #d2d8d8;
  border-radius: 3px 3px 0 0;
}
.md-content > div {
  padding: 15px 40px 30px;
  margin: 0;
  font-weight: 300;
  font-size: 1.15em;
}
.md-content > div p {
  margin: 0;
  padding: 10px 0;
}
.md-content > div ul {
  margin: 0;
  padding: 0 0 30px 20px;
}
.md-content > div ul li {
  padding: 5px 0;
}
.md-content button {
  display: block;
  margin: 0 auto;
  font-size: 0.8em;
}
@-webkit-keyframes slit {
  50% {
    -webkit-transform: translateZ(-250px) rotateY(89deg);
    opacity: 0.5;
    -webkit-animation-timing-function: ease-out;
  }
  100% {
    -webkit-transform: translateZ(0) rotateY(0);
    opacity: 1;
  }
}
@-moz-keyframes slit {
  50% {
    -moz-transform: translateZ(-250px) rotateY(89deg);
    opacity: 0.5;
    -moz-animation-timing-function: ease-out;
  }
  100% {
    -moz-transform: translateZ(0) rotateY(0);
    opacity: 1;
  }
}
@keyframes slit {
  50% {
    transform: translateZ(-250px) rotateY(89deg);
    opacity: 1;
    animation-timing-function: ease-in;
  }
  100% {
    transform: translateZ(0) rotateY(0);
    opacity: 1;
  }
}
@-webkit-keyframes rotateRightSideFirst {
  50% {
    -webkit-transform: translateZ(-50px) rotateY(5deg);
    -webkit-animation-timing-function: ease-out;
  }
  100% {
    -webkit-transform: translateZ(-200px);
  }
}
@-moz-keyframes rotateRightSideFirst {
  50% {
    -moz-transform: translateZ(-50px) rotateY(5deg);
    -moz-animation-timing-function: ease-out;
  }
  100% {
    -moz-transform: translateZ(-200px);
  }
}
@keyframes rotateRightSideFirst {
  50% {
    transform: translateZ(-50px) rotateY(5deg);
    animation-timing-function: ease-out;
  }
  100% {
    transform: translateZ(-200px);
  }
}
@-webkit-keyframes OpenTop {
  50% {
    -webkit-transform: rotateX(10deg);
    -webkit-animation-timing-function: ease-out;
  }
}
@-moz-keyframes OpenTop {
  50% {
    -moz-transform: rotateX(10deg);
    -moz-animation-timing-function: ease-out;
  }
}
@keyframes OpenTop {
  50% {
    transform: rotateX(10deg);
    animation-timing-function: ease-out;
  }
}
#spinner {
  display: block;
  margin: 40px auto;
  width: 80px;
}
#spinner > div {
  width: 18px;
  height: 18px;
  background-color: #298eea;
  border-radius: 100%;
  margin: 0 3px;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}
#spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
#spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.notice {
  display: none;
  visibility: hidden;
  max-height: 0;
  position: relative;
  color: #b2dbff;
  font-size: 14px;
  line-height: 1.5em;
  font-weight: 600;
  padding: 15px 70px 14px;
  margin: 0 0 20px;
  background: rgba(41, 142, 234, 0.3);
  border: 2px solid rgba(41, 142, 234, 0.31);
  border-radius: 3px;
  transition: max-height 0.6s ease;
}
.notice.show {
  display: block;
  visibility: visible;
  max-height: 200px;
}
.notice div {
  position: absolute;
  font-size: 22px;
  top: 0;
  bottom: 0;
  padding: 0 24px;
  background: rgba(0, 0, 0, 0.1);
}
.notice div i {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  margin-top: -11px;
  color: #98ceff;
}
.notice .notice-icon {
  left: 0;
  border-right: 2px solid rgba(41, 142, 234, 0.3);
}
.notice .close-notice {
  right: 0;
  border-left: 2px solid rgba(41, 142, 234, 0.3);
  cursor: pointer;
}
#content > div.cookie-message.notice.show > div.close-notice > i {
  cursor: pointer;
}
@-webkit-keyframes sk-bouncedelay {
  0%,
  100%,
  80% {
    -webkit-transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1);
  }
}
@keyframes sk-bouncedelay {
  0%,
  100%,
  80% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  40% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}
@-webkit-keyframes shake {
  from,
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}
@keyframes shake {
  from,
  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}
.shake {
  -webkit-animation-name: shake;
  animation-name: shake;
}
.ps-scrollbar-y-rail {
  left: 0 !important;
  right: auto !important;
}
.ps-container > .ps-scrollbar-y-rail {
  display: block !important;
  width: 5px !important;
  background-color: rgba(255, 255, 255, 0.2) !important;
  opacity: 0.5 !important;
}
.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  width: 5px !important;
}
#paginador {
  float: left;
  clear: both;
  width: 100%;
  margin: 10px 0;
}
#paginador .paginado a,
#paginador .paginado span,
.pag-nav span {
  display: inline-block;
  margin: 0 4px 4px;
  padding: 4px 8px;
  color: #555;
}
#paginador .paginado {
  font-size: 12px;
  font-weight: 300;
  line-height: 20px;
}
#paginador .paginado a,
.pag-nav span {
  border: 1px solid rgba(0, 0, 0, 0.69);
  -webkit-border-radius: 3px;
  border-radius: 3px;
  background-color: rgba(0, 0, 0, 0.2);
}
#paginador .paginado span {
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  background-color: #e7e7e7;
}
.imdb2_r .b,
.imdb_r .b {
  margin-top: 3px;
  float: left;
}
#paginador .paginado .current {
  color: #fff;
  border: 1px solid #000;
  background: #2d2e4c;
}
#paginador .paginado a {
  font-size: 12px;
  margin: 3px;
  text-decoration: none;
  color: #fff;
  background-color: #3c3c62;
}
.imdb2_r .b .bar,
.imdb_r .b .bar {
  font-size: 0;
  height: 13px;
  overflow: hidden;
}
#paginador .paginado a:hover {
  color: #fff;
  background-color: #000;
}

#main #main-header .logo {
  width: 188px;
  height: 21px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALwAAAA4CAMAAABwtmJXAAAAaVBMVEVHcEz///////////////////////////////////8pjuopjur///8pjur///8pjuopjur///8pjuopjuopjur///////8pjur///8pjuopjuopjur///////8pjuopjur///////8pjup6U+zGAAAAIXRSTlMAzYi7Ipnud91m7qoRMzMRVUSId8yqVCLIZplE5bO73f6vZXRfAAACzElEQVRo3u2W0ZaiMAyGK0ALiAAqqDM6Wt7/Ibdpkra6Z6/gYs+c/Bczoah8Sf+EKiUSiUQikUgkEolEIpFIJBKJRCLRL1FuQTsfax9XdOeBl/esiDc7ujfChe4srdlUql+cfuBjR4iW3kV944K9uixBX/16+Iqe6IQsNvfr2cu+GGdqYQGijL5VwoUp/N3iHV4rdXZsDXzs7DG/XTRAcEvhl+dlK/iO8Qj+EdFhMwoqNu6Q8tS6LTjvFL6igju0HilvvAf9G/zytRqeHpkF19gy5HEPRDtOEy3kbxvMoaIfqeJv+jIPSh0Q8uSW0DUI75K5Lbw5a+E10o0UllRle1Um0BuFFwa+02qEZfj2A95X/KjUCeH3lMZA8GCjJwRr2eH5O3h26308IfzE5S4esfRd8JRPoyb4PCYRRHXeI/wZXdP0Sn0zfLNF5YGoBPoZyrkzCK+p8k7zPXQ0JYkGqnjmMHzcIqRuPGGDFT5jNgh/oLT2a+Hh+QYsbGZwvoleJniaLGB2LnhN/xG+DGMqwnu/HMArxxCBawieGvawFr5m7gky6Mq/4ecrV94vT7gD3iSzTVsEBUmRxSGF4ckRuAZb+XIOQ2idoJo1NFylgQjh2wjf5TgzNb/QdDsGxprm1BxK/tax4I0e/pzYNThlLrAdp4PaBh7dDBwIT9fXMPpxfqJv5jx0J8+f+hMePd7AexZA9+wahN/sdAC0I9nadqpMpqK9zlVww+hHpKWBhIUP8CYukY4Lj/iBIu8abIZNjzYjwVZ46ShaoH4lB4QsPQiFsZj9E/4WepK7E0fLtvA7P0g6JiR41em3s1aetHcCWhJ8aT/HDSHDJCd47xr1tSm8xinIR0aGV+30yRN8E99HOSWS289x419CeHrB0bL028O3NMInQqpiWQuDbWvSTpzSwmNf19zfaXcQ8sC8/EL62bTyIpFIJBL9L/oDcLmVlaRB0moAAAAASUVORK5CYII=);
  text-indent: -9999px;
}
.detail #content #serie-tv {
  position: relative;
  z-index: 10;
}
.detail #serie-tv {
  display: inline-block;
  width: 25%;
  vertical-align: top;
}
#serie-tv li.episodi {
  background: #34495e;
  margin: 0;
  padding: 10px;
}
#serie-tv li.stagione {
  cursor: pointer;
  font-size: 17px;
  line-height: 2em;
  color: rgba(255, 255, 255, 0.7);
  background: #298eea;
  padding: 3px;
}
#serie-tv .hide {
  display: none;
}
a#tv.active,
a#tv:hover {
  font-weight: 700;
  color: #fff;
}
#serie-tv li.episodi p {
  font-size: 16px;
  color: #bbb;
}
#serie-tv li.stagione:hover {
  color: #fff;
}
a#tv {
  color: #bbb;
}
#serie-tv li:first-child {
  border-radius: 5px 5px 0 0;
}
#serie-tv li:last-child {
  border-radius: 0 0 5px 5px;
}
.actions-list > li,
.detail .movie-actions ul > li {
  position: relative;
  font-size: 16px;
  display: block;
  color: rgba(255, 255, 255, 0.7);
  background: #34495e;
  text-align: center;
}
.actions-list #subtitles,
.detail .movie-actions ul li#subtitles {
  border-radius: 5px 5px 0 0;
}
.tv-details-episodes-info .actions-list {
  width: 100%;
  margin-top: 30px;
}
.tv-details-episodes-info p {
  margin-top: 30px;
  color: rgba(255, 255, 255, 0.71);
}
.actions-list,
.detail .tv-details .movie-actions ul {
  display: inline-block;
  width: 50%;
  vertical-align: top;
}
.actions-list #subtitle-button,
.detail .movie-actions #subtitle-button {
  display: block;
}
.actions-list #subtitle-button #subfile,
.detail .movie-actions #subtitle-button #subfile {
  display: none;
}
.actions-list #subtitle-button label,
.detail .movie-actions #subtitle-button label {
  display: block;
  padding: 16px 20px;
  cursor: pointer;
}
.actions-list li i,
.detail .movie-actions ul li i {
  vertical-align: text-top;
  padding-right: 10px;
}
.trailer__player {
  position: relative;
}
.trailer__player img {
  position: relative;
  max-width: 100%;
  z-index: 1;
}
.trailer__player iframe {
  width: 100%;
  height: calc(100% - 0px);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
}
.player__play-button {
  display: block;
  position: absolute;
  width: 4em;
  height: 4em;
  background: #0af;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  color: #fff;
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  border: 2px solid #fff;
}
.AZList {
  font-size: 0;
  margin: 0 -5px 15px;
}
.AZList > li {
  display: inline-block;
  vertical-align: top;
  position: relative;
  margin-bottom: 5px;
}
.purple,
.blue {
  vertical-align: middle;
  box-shadow: 0 0 1px transparent;
}
.AZList > li:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  border-radius: 15px;
  z-index: 1;
  height: 30px;
  right: 0;
  opacity: 0.2;
  margin: 0 0.2rem;
  transition: 0.2s;
  background-color: #78909c;
}
.AZList > li:hover {
  background-color: #298eea;
  border-radius: 15px;
}
.AZList > li > a {
  display: block;
  line-height: 30px;
  border-radius: 15px;
  font-weight: 700;
  font-size: 0.75rem;
  text-transform: uppercase;
  position: relative;
  z-index: 2;
  min-width: 50px;
  color: #fff;
}
.pagination {
  margin-top: 60px;
  width: 100%;
  font-size: 16px;
  opacity: 1 !important;
}
.pagination a,
.pagination span {
  padding: 10.5px 20px;
  margin: 0 5px;
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  font-size: 16px;
}
.pagination a.inactive {
  color: rgba(255, 255, 255, 0.7);
  background: rgba(255, 255, 255, 0.2);
  font-weight: 500;
}
.pagination span.current {
  background: #298eea;
  color: #fff;
  font-weight: 500;
}
a.arrow_pag {
  font-size: 16px;
  padding: 9.3px 20px;
  color: rgba(255, 255, 255, 0.7);
  background: rgba(255, 255, 255, 0.2);
  font-weight: 500;
}
.pagination a:hover {
  color: rgba(255, 255, 255, 0.85);
  background: rgba(255, 255, 255, 0.3);
}
#buttonposter,
i.hd {
  background-color: #298eea;
}
.resppages {
  display: none;
}
#disqus_thread {
  position: relative;
  z-index: 10;
  margin-top: 20px;
  padding-top: 20px;
}
.rating,
p#buttondownload {
  float: left;
}
.detail #content .movie-info h1 span,
.detail #content .movie-info h1 span a {
  color: rgba(160, 160, 160, 0.77);
  font-weight: 500;
}
#buttonposter,
#buttonposter > p,
.rating,
a,
i.hd {
  color: #fff;
}
i.hd {
  padding: 1px 6px;
  border-radius: 2px;
  font-size: 14px;
  font-weight: 700;
  margin-right: -1px;
}
#buttonposter > p > i,
.rating {
  margin-right: 10px;
}
.detail #content .movie-info span#hd-icon {
  font-style: italic;
  font-size: 18px;
  font-weight: 700;
}
#buttonposter {
  border-radius: 0 0 5px 5px;
  padding: 10px 25px;
  display: block;
  cursor: pointer;
  margin-bottom: 20px;
}
#buttonposter > p {
  cursor: pointer;
  font-size: 13px;
  font-weight: 700;
}
.button:hover {
  border: 1px solid rgba(255, 255, 255, 0.88);
  transition: 0.3s ease;
}
p#buttondownload {
  border-radius: 5px;
  background-color: #c054c1;
  padding: 13px;
  color: #fff;
  position: relative;
  z-index: 1;
  display: block;
  width: 100%;
}
p#buttondownload:hover {
  background-color: #9a329b;
}
.rating {
  width: 40px;
  height: 37px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAAyCAYAAAD845PIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY3RjFBQjE2NEMzMzExRTdBNEExQ0VDNDc5NzVDOTJDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY3RjFBQjE3NEMzMzExRTdBNEExQ0VDNDc5NzVDOTJDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjdGMUFCMTQ0QzMzMTFFN0E0QTFDRUM0Nzk3NUM5MkMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjdGMUFCMTU0QzMzMTFFN0E0QTFDRUM0Nzk3NUM5MkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz72S8QWAAAElklEQVR42txaa2xMQRSerlKtVxA0CBFt0W754RWPeLZCI/jVhKQJRSOhP2jRVoUERaIiCOpRjUSFH14hafTh1YdGJBpt0RIpqkJI0Khn6pzsd5Oxdru73Tt373WSL7ezM/fe8803M3fOmQa13xKqLZmQRhhNeELIJeSrfKFNMaGthFOEaLwrGuVsq5IaStiCv7MIw6RyNuotRyqTEEK4S9hNeEXIQTkERJVYkKI5xSo8g/NzCWVS3RxCKeE7IYLw2ipKZYBQuRMhgXI56jOsotQQwnM4HQdVnI3VK4FaIwnNZlcqU1Kp1E2bUkmtTLMrNQRzqTshHmq4M1axmPANc6vZrEplgFC5B0IC9eVon2FWpWSV5kEFT8Zq3tBbLZsClSq8JCTQrgL3bTabUp1RyZVavBK+MYtSu0Co0kdCmlqVuD8nUEqFEyIlTMR3p50wm3C7E37MJNxkf7Dc3yc0SnirB6mBmLijcNUQRejpov0vzIn9fnTwBsJeQrCLulZCA4a4hqe4vnNHKpSQTlgEx3t38HIm0IQHci/WE4oIL3QYOSMI8xGiRKIjh7shqtlnEL5K2EdoY1LdsXOeIDX8TXgJxxskAo1w/qcwzrqCbKRENApXDme6SG0fEKZzD6SA0HuoVQ3Hfwhz2E90bIOLum4gPBkqjWc+wVhS2fYQzghr2Q/MLUZ/zOl4XtLb0KCvsLb1w7WNSV1GYRMh0aKEEqUdyUUmdQ7DjsdnISHJYoSS4HdX8Dhvw0czGVkeXkkKCKstQigF/rLf+eDRbpOWcCZyBFunPEKqyQmxf8fgL/u9Cjz+2vuxYuuwNPJ25aCeO2edbTP8Yz9z4Xe7uw0tV2wk7JSW+W0mI7Qdfmkb6XSZUEe7dM6sZrl4SKBN7mROjGb7GnpwAnI9ekGWOxAmTwf2J62jMCXYw8MOIHg7gonJ2Z81znIbQCgPCxm/dy3hqL9BIq8wK7CypGBoGmlbQYjfv9ITIV+DRO1b9pUwAFfVFoaNdhiInVQR+X5BkGgn1BlAKoZQiyCxl4ocRQ/0GNtHg4beB0mxHipIxaA9E2oxiNRbELPh/UpIsT0yeKGoxTVaBSl7gEhp74tVQSrWqef+K1J1BpOqV0WKQ+XwAA+/cClk14WU1kucNvtkMKlPeK/XavlKqjMqJRAuEWpwTVA9r7wlZXca394Y58f5UO06YQlhLK5c5uObWarmlbekfPlGTRKOoxnegE3DHpGj0wWIqrk8VTgOBIrR3lulYoweftyG0233hCNByonGw8KRHubotAhRdQR+5/o4tL/iQYVHTiPGb1KDCX2w9X/sop7z22cJDwmL0e60cOS7U11sqVrwexTacftFuL8Qz3O2x2jXB/74Tcom5S9Cpd85OX8c430ZfruA3uQwpcnDc5vQzo772JbieSfwfM1CpcC0i16hRw0m+h3ENFPgUAjqryFfUOPH0j0OCZ+FKPM/jnAurwrprxn48Nv1IsWnCiXi3wO3MpCp0vG7xB22QzhOJ2VrxRys1jNI5AnO+bUxCAkKsIKpMj5qXU4YJBynGoeE45zMo/0RYAB4wC9Me7D6owAAAABJRU5ErkJggg==);
  background-size: contain;
  background-repeat: no-repeat;
  display: inline-block;
  line-height: 43px;
  position: static;
  padding-bottom: 5px;
  margin-top: -2px;
}
.rating:hover {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAAyCAMAAADLPWP6AAAAsVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Q9rufAAAAOnRSTlMAYvS7k5b5/vwaAcMXZ35xJZqpiN95P0T38AoQbTYuzB60QlwHSp+iPI2LxLAEX+o5hMG4IVfF1SvRoK3uYwAAAiBJREFUSMeVldd26yAQRUfFAsmxJdfEJe497k7d//9h9yFxlhwjXTFPMLA5AwyMSIY5H+rDEUurAlC1g8KA1qhFEFpRJcoiUqZkKTURkYmdmE9ZRETK+NZSlmJXKSux8InHn+YjT6G1lIVYSspCzOcl1XspJnYjVVhswftN/51FPvCwchoeqn3jbCu8hrN6MEw/Oqf60AVAx38GYw2AO6yfnOMV7laHHb5NNy9+5fVuzdeKf2lqAKAzrHZFZkNANz0/nie7nOh3yTz2vaYGhjPpc9gns8LJNkv2B/oyJrZ85jFjqXOypE7UZUrwZgW9BbxJtERPLaCpZhmJ7GqoSmGooljsRESiEqpfEOorStF3M9pAqxDUgnWUOpZCH2aV2wNvQeO/UOMupFjhR7lM5KNiw+HU8rDIfNR7nbu3KtpYYhzcbibUdcmoSy6fmdQnbsZyiux/5QFlDuSZTs6+DjybayrnHOrM3uhf5/6XPmuj3yMv9St4GZGvcqgVB9Pd96CXQ2UMt2nm5mGTtunBMU5359uv7TztGGN6ujU2KeEXAN5Ty2+oGagyv5/Oswfuer5xwfu92+lNWbtah8F3Y7BVBH4oIqEfoLZXtyl1QvRMRCRZKvRi9OMdLTSqnoiIzLQhTUN0T2RU+531Y0ldoWsjkZ5mdC/2xXlaCmA8+DMwGENQmp75MKW8C+AdDUNHD8A1Jn3iX5aTjCueLC9+Ku5/NvxD9byi+MMAAAAASUVORK5CYII=);
  color: #febf15;
}
.detail #content .movie-info b {
  font-size: 15px;
  cursor: pointer;
  margin-top: -30px;
}
.detail #content .movie-info b:hover {
  opacity: 1;
}
.details span {
  display: inline-block;
  margin: 0 5px;
}
.details span a {
  color: rgba(255, 255, 255, 0.7);
}
.detail .movie-actions .extra li#streaming-4k a span,
.details span a:hover,
.download a span {
  color: #fff;
}
.details {
  border-top: 1px solid rgba(255, 255, 255, 0.07);
  padding-top: 20px;
}
.detail #content .movie-info .movie-data span:before {
  display: none;
}
.detail #content .movie-info em span:hover {
  border: 1px solid rgba(255, 255, 255, 0.88);
  transition: 0.3s ease;
}
.detail .movie-actions .extra li#streaming-3d {
  background-color: #e67e22;
}
#streaming-3d > a > span {
  color: #fff;
}
#streaming-3d > a > span > em {
  margin-left: 5px;
  font-style: italic;
  font-size: 18px;
  font-weight: 700;
}
.detail .movie-actions .extra li#streaming-hd {
  background-color: #298eea;
  border-radius: 0 0 5px 5px;
}
.detail .movie-actions .extra li#streaming-4k {
  border-radius: 5px;
  background-color: #c054c1;
}
.download a span em {
  margin-left: 5px;
  font-size: 18px;
  font-weight: 700;
}
.detail .movie-actions .extra li#download-button .download a span {
  color: rgba(255, 255, 255, 0.7);
}
.detail .movie-actions .extra li#download-button .download a span:hover,
.detail .movie-actions .extra li#download-button a:hover {
  color: #fff;
}
.movie-actions {
  margin-bottom: 20px;
}
.detail .movie-actions .extra li div span {
  color: rgba(255, 255, 255, 0.7);
}
.detail .movie-actions .extra li div span:hover,
.detail .movie-actions ul > li a:hover {
  color: #fff;
}
span.item-tv {
  position: absolute;
  left: 5px;
  top: 4px;
  padding: 5px;
  z-index: 1;
  font-size: 0.6rem;
  font-weight: 700;
  color: #fff;
}
span.top-number {
  position: absolute;
  left: -5px;
  top: -4px;
  min-width: 22px;
  padding: 0 5px;
  border-radius: 3px 0 0;
  z-index: 1;
  font-size: 0.6rem;
  font-weight: 700;
  line-height: 23px;
  color: #000;
  background-color: #ffc107;
}
span.top-number:after,
span.top-number:before {
  content: "";
  width: 0;
  top: 0;
  right: -5px;
  position: absolute;
  border-bottom: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom-color: #ffc107;
  box-sizing: inherit;
}
span.top-number:after {
  border-bottom-color: rgba(0, 0, 0, 0.4);
}
span.top-number i {
  position: absolute;
  left: 0;
  right: 0;
  bottom: -4px;
}
span.top-number i:before {
  border-left: 11px solid transparent;
  float: right;
}
span.top-number i:after {
  border-right: 11px solid transparent;
  float: left;
}


@media (max-width: 900px) {
  body .sidebar {
    position: fixed;
    top: 0;
    z-index: -1;
  }
  #Rated {
    display: none !important;
  }
  #main #header-secondary .filters ul li .dropdown-toggle .value,
  .person .data {
    display: none;
  }
  #content .item .item-details span.movie-date {
    padding-top: 1px;
  }
  body .sidebar nav {
    top: 0;
  }
  body.overview #main {
    background: #1d1b24;
  }
  #content .item {
    width: calc(100% / 4);
  }
  #content {
    margin-top: 50px;
  }
  .detail #content {
    padding: 30px 0;
    margin-top: 0;
  }
  #main #main-header {
    position: relative;
  }
  #main #main-header .inner-container {
    text-align: center;
  }
  #main #main-header .logo {
    display: inline-block;
    float: none;
    margin: 0;
  }
  #main #main-header .header-nav li.contact,
  #main #main-header .header-nav li.premium,
  #main #main-header .main-nav {
    display: none;
  }
  #main #header-secondary {
    position: absolute;
    top: 80px;
    left: 0;
    float: left;
    width: 100%;
  }
  #main #header-secondary .inner-container {
    padding-left: 30px;
  }
  .sb-toggle-left {
    display: inline-block;
  }
  .detail #content .movie-info .movie-data span {
    display: inline-block;
    padding-bottom: 15px;
  }
  .landing-trial #main #features,
  .premium-packages > li.credits {
    display: none;
  }
  .detail.show-detail #content {
    margin-top: 0;
  }
  #content.login form {
    width: 90%;
  }
  .landing-all #main #features {
    width: 255px;
    padding: 20px;
  }
  .landing-all #main #landingform {
    width: calc(100% - 255px);
  }
  .landing-trial #main #landingform {
    width: 100%;
  }
  #premium .premiumform .server,
  #premium .premiumform h3 {
    float: none;
    margin-bottom: 10px;
  }
}
@media (max-width: 768px) {
  .premium-packages li .package-features ul li,
  .resppages a {
    text-align: center;
  }
  .pagination {
    display: none;
  }
  .resppages {
    display: block !important;
  }
  #main #header-secondary .filters ul li.abc-filter,
  .tv-details-episodes ol li.active:after {
    display: none;
  }
  .resppages a {
    background: #298eea;
    color: #fff;
    width: 48%;
    margin: 0 1%;
    padding: 10px 0;
    float: left;
    font-size: 16px;
  }
  .detail #content .movie-info {
    width: 100%;
    padding-left: 0;
  }
  .tv-details-seasons {
    width: 30%;
  }
  .tv-details-episodes {
    width: 70%;
    padding-right: 0;
  }
  .tv-details-episodes-info {
    width: 100%;
    padding-left: 0;
    margin-top: 30px;
  }
  #contactform,
  #content.login form {
    width: 100%;
  }
  .premium-packages > li:first-child {
    position: relative;
    width: 302px;
    max-width: 100%;
    margin-top: 343px;
    margin-right: -306px;
    z-index: 1;
  }
  .premium-packages li header .selection input[type="radio"] + label {
    width: 100%;
    padding: 13px 10px;
    margin: 0;
  }
  .premium-packages
    li
    header
    .selection
    input[type="radio"]
    + label:last-of-type {
    margin-bottom: 15px;
  }
  .premium-packages li header .selection input[type="radio"] + label span {
    display: inline;
  }
  .landing #main {
    display: block;
  }
  .landing #main #features,
  .landing #main #landingform,
  .landing #main header {
    position: relative;
    display: block;
    width: 100%;
    min-height: auto;
    margin: 0;
    padding: 30px 20px;
  }
  .landing #main #landingform {
    float: none;
    border-radius: 0;
  }
  .landing #main .secondaryheader {
    display: block;
    padding: 0 20px;
  }
  .landing #main .secondaryheader i {
    right: 20px;
  }
  .landing #main header h1 {
    left: auto;
    right: 20px;
  }
  .landing #main header h1:before {
    display: none;
  }
  .landing #main #features {
    top: 0;
    border-radius: 0 0 5px 5px;
  }
  .landing #main #features ul li {
    display: inline-block;
    width: 50%;
  }
  .landing #main #features ul li:before,
  .landing-trial #main #features ul li:last-child {
    display: none;
  }
  #main #main-header .logo {
    right: 100px;
  }
  .landing-trial #main #landingform {
    padding: 0;
  }
  #premium .features,
  #premium .premiumform {
    display: block;
    width: 100% !important;
  }
  .notice {
    padding: 15px 70px 14px 40px;
  }
  .notice .notice-icon {
    left: -15px;
    top: 50%;
    margin-top: -18px;
    z-index: 11;
    background: #205288;
    bottom: auto;
    padding: 5px 8px;
    font-size: 15px;
    border-radius: 50%;
    border: 2px solid rgba(41, 142, 234, 0.3);
  }
  .notice .notice-icon i {
    position: relative;
    top: auto;
    left: auto;
    right: auto;
    margin: 0;
    vertical-align: middle;
  }
}
@media (max-width: 600px) {
  .inner-container {
    padding: 0 20px;
  }
  .person {
    position: relative;
    padding: 10px 0 10px 33px;
    min-height: 30px;
    float: left;
    width: calc(100% / 4.4);
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .person .img {
    position: absolute;
    left: 0;
    top: 0;
    width: 50px;
    height: 50px;
    overflow: hidden;
  }
  #content {
    margin-top: 110px;
    padding-top: 20px;
  }
  #content .item {
    width: calc(100% / 3);
  }
  .form .fieldset {
    margin: 10px 0;
  }
  .form .btn-auth {
    display: block;
    width: 100%;
    margin: 0 0 10px;
  }
  .form input[type="checkbox"] {
    margin: 10px 5px 20px 0;
  }
  #main #header-secondary {
    top: 130px;
    height: 60px;
    background: #2f3444;
  }
  #main #header-secondary .inner-container {
    padding-left: 20px;
  }
  #main #header-secondary .filters {
    float: none;
  }
  #main #header-secondary .filters ul {
    display: flex;
  }
  #main #header-secondary .filters > ul > li {
    flex: 1;
    line-height: 40px;
    margin: 10px 10px 10px 0;
    text-align: center;
  }
  #main #header-secondary .filters > ul > li.genre-filter {
    position: inherit;
  }
  #main #header-secondary .filters > ul > li.quality-filter {
    margin-right: 0;
  }
  #main #header-secondary .filters ul li.search {
    height: auto;
    line-height: 30px;
    position: absolute;
    left: 0;
    right: 0;
    top: -50px;
    padding: 0 20px;
    background: #1d1b24;
  }
  #main #header-secondary .filters ul li .dropdown-toggle {
    display: block;
  }
  #main #header-secondary .filters ul ul,
  .landing #main .secondaryheader i,
  .landing #main header h1 {
    display: none;
  }
  #main #header-secondary .filters ul li.search form {
    position: relative;
  }
  #main #header-secondary .filters ul li.search form i {
    position: absolute;
    left: 0;
    top: 50%;
    margin-top: -7px;
  }
  #main #header-secondary .filters ul li.search form input {
    width: 100%;
    padding-left: 20px;
  }
  #main #header-secondary .filters ul li.dropdown.open > ul {
    margin-top: 10px;
    text-align: left;
  }
  #main #header-secondary .filters ul li.dropdown.quality-filter.open > ul {
    left: auto;
    right: 0;
  }
  #main
    #header-secondary
    .filters
    ul
    li.dropdown.open
    > ul.dropdown-menu-large {
    left: 0;
    right: 0;
    width: auto;
    margin-top: 0;
    box-sizing: border-box;
  }
  #main
    #header-secondary
    .filters
    ul
    li.dropdown.open
    > ul.dropdown-menu-large
    li
    input[type="checkbox"]
    + label {
    line-height: 40px;
  }
  .premium-packages {
    position: relative;
  }
  .premium-packages > li:first-child {
    position: absolute;
    left: 4px;
    right: 4px;
    margin-right: 0;
    width: auto;
    min-width: 0;
    max-width: 100%;
  }
  .premium-packages > li {
    min-width: 0;
  }
  .premium-packages > li.popular {
    width: 100%;
    min-width: 0;
  }
  .landing #main header {
    text-align: center;
  }
  .landing #main .secondaryheader {
    padding: 20px 30px;
  }
  .landing #main .secondaryheader h2 {
    display: block;
    text-align: center;
    line-height: 1.5em;
  }
  .landing #main #features ul li {
    display: block;
    width: 220px;
    margin: auto;
  }
  .landing-trial #main #features ul li {
    display: inline-block;
    width: 50%;
  }


@media (max-width: 1020px) {
  .detail #serie-tv {
    width: 100%;
    margin-top: 30px;
  }
}
@media (max-width: 1000px) {
  li#abc.dropdown.quality-filter {
    display: none !important;
  }
}
#site-container,
.sb-site-container,
.sidebar,
body,
html {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body,
html {
  width: 100%;
  overflow-x: hidden;
}
html {
  height: 100%;
}
body {
  min-height: 100%;
  height: auto;
  position: relative;
}
html.sb-scroll-lock.sb-active:not(.sb-static) {
  overflow: hidden;
}
#site-container,
.sb-site-container {
  width: 100%;
  min-height: 100vh;
  position: relative;
  z-index: 1;
}
#site-container:after,
#site-container:before,
.sb-site-container:after,
.sb-site-container:before {
  content: " ";
  display: table;
  clear: both;
}
.sidebar {
  height: 100%;
  overflow-y: auto;
  position: fixed;
  top: 0;
  z-index: 0;
  display: none;
  background-color: #121117;
}
.sidebar,
.sidebar * {
  -webkit-transform: translateZ(0);
}
.sb-left {
  left: 0;
}
.sb-right {
  right: 0;
}
.sidebar.sb-static,
html.sb-static .sidebar {
  position: absolute;
}
.sidebar.sb-active {
  display: block;
}
.sb-style-overlay {
  z-index: 9999;
}
.sb-momentum-scrolling {
  -webkit-overflow-scrolling: touch;
}
.sb-width-thin {
  width: 15%;
}
.sb-width-wide {
  width: 45%;
}
@media (max-width: 480px) {
  .sb-width-thin {
    width: 55%;
  }
  .sb-width-wide {
    width: 85%;
  }
}
@media (min-width: 481px) {
  .sb-width-thin {
    width: 40%;
  }
  .sb-width-wide {
    width: 70%;
  }
}
@media (min-width: 768px) {
  .sb-width-thin {
    width: 25%;
  }
  .sb-width-wide {
    width: 55%;
  }
}
@media (min-width: 992px) {
  .sb-width-thin {
    width: 15%;
  }
  .sb-width-wide {
    width: 45%;
  }
}
@media (min-width: 1200px) {
  .sb-width-thin {
    width: 5%;
  }
  .sb-width-wide {
    width: 35%;
  }
}
#site-container,
.sb-site-container,
.sb-slide,
.sidebar {
  -webkit-transition: -webkit-transform 0.4s ease;
  -moz-transition: -moz-transform 0.4s ease;
  -o-transition: -o-transform 0.4s ease;
  transition: transform 0.4s ease;
  -webkit-transition-property: -webkit-transform, left, right;
  -webkit-backface-visibility: hidden;
}
.sb-hide {
  display: none;
}
.ps-container {
  -ms-touch-action: none;
  overflow: hidden !important;
}
.ps-container.ps-active-x > .ps-scrollbar-x-rail,
.ps-container.ps-active-y > .ps-scrollbar-y-rail {
  display: block;
}
.ps-container.ps-in-scrolling {
  pointer-events: none;
}
.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9;
}
.ps-container.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  background-color: #999;
}
.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9;
}
.ps-container.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  background-color: #999;
}
.ps-container > .ps-scrollbar-x-rail {
  display: none;
  position: absolute;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  opacity: 0;
  -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
  -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
  -o-transition: background-color 0.2s linear, opacity 0.2s linear;
  transition: background-color 0.2s linear, opacity 0.2s linear;
  bottom: 3px;
  height: 8px;
}
.ps-container > .ps-scrollbar-x-rail > .ps-scrollbar-x {
  position: absolute;
  background-color: #aaa;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: background-color 0.2s linear;
  -moz-transition: background-color 0.2s linear;
  -o-transition: background-color 0.2s linear;
  transition: background-color 0.2s linear;
  bottom: 0;
  height: 8px;
}
.ps-container > .ps-scrollbar-y-rail {
  display: none;
  position: absolute;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  opacity: 0;
  -webkit-transition: background-color 0.2s linear, opacity 0.2s linear;
  -moz-transition: background-color 0.2s linear, opacity 0.2s linear;
  -o-transition: background-color 0.2s linear, opacity 0.2s linear;
  transition: background-color 0.2s linear, opacity 0.2s linear;
  right: 3px;
  width: 8px;
}
.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y {
  position: absolute;
  background-color: #aaa;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: background-color 0.2s linear;
  -moz-transition: background-color 0.2s linear;
  -o-transition: background-color 0.2s linear;
  transition: background-color 0.2s linear;
  right: 0;
  width: 8px;
}
.ps-container:hover.ps-in-scrolling {
  pointer-events: none;
}
.ps-container:hover.ps-in-scrolling.ps-x > .ps-scrollbar-x-rail {
  background-color: #eee;
  opacity: 0.9;
}
.ps-container:hover.ps-in-scrolling.ps-x
  > .ps-scrollbar-x-rail
  > .ps-scrollbar-x {
  background-color: #999;
}
.ps-container:hover.ps-in-scrolling.ps-y > .ps-scrollbar-y-rail {
  background-color: #eee;
  opacity: 0.9;
}
.ps-container:hover.ps-in-scrolling.ps-y
  > .ps-scrollbar-y-rail
  > .ps-scrollbar-y {
  background-color: #999;
}
.ps-container:hover > .ps-scrollbar-x-rail,
.ps-container:hover > .ps-scrollbar-y-rail {
  opacity: 0.6;
}
.ps-container:hover > .ps-scrollbar-x-rail:hover {
  background-color: #eee;
  opacity: 0.9;
}
.ps-container:hover > .ps-scrollbar-x-rail:hover > .ps-scrollbar-x {
  background-color: #999;
}
.ps-container:hover > .ps-scrollbar-y-rail:hover {
  background-color: #eee;
  opacity: 0.9;
}
.ps-container:hover > .ps-scrollbar-y-rail:hover > .ps-scrollbar-y {
  background-color: #999;
}
.rating,
p#buttondownload {
  text-align: center;
  float: left;
}
.detail #content .movie-info h1 span {
  color: rgba(160, 160, 160, 0.77);
  font-weight: 500;
}
.detail #content .movie-info h1 span a {
  color: rgba(160, 160, 160, 0.77);
  font-weight: 500;
}
a {
  color: #fff;
}
.detail #content .movie-info span#hd-icon {
  font-style: italic;
  font-size: 18px;
  font-weight: 700;
}
.button:hover {
  border: 1px solid rgba(255, 255, 255, 0.88);
  transition: 0.3s ease;
}
p#buttondownload {
  border-radius: 5px;
  background-color: #c054c1;
  padding: 13px;
  color: #fff;
  position: relative;
  z-index: 1;
  display: block;
  width: 100%;
}
p#buttondownload:hover {
  background-color: #9a329b;
}
@media (max-width: 1110px) {
  .detail #content .movie-image a p {
    font-size: 12px;
    margin-left: -20px;
  }
}
@media (max-width: 768px) {
  .detail #content .movie-info {
    width: calc(100% - 200px);
    margin-left: 20px;
  }
  .movie-info p.movie-description span.trama {
    font-size: 14px;
  }
  .detail #content .movie-info .movie-data {
    margin-bottom: -40px;
    border-bottom: 0;
  }
  .detail #content .movie-image {
    width: 150px;
    left: 0;
  }
}

.rating {
  width: 40px;
  height: 37px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAAyCAYAAAD845PIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY3RjFBQjE2NEMzMzExRTdBNEExQ0VDNDc5NzVDOTJDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY3RjFBQjE3NEMzMzExRTdBNEExQ0VDNDc5NzVDOTJDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjdGMUFCMTQ0QzMzMTFFN0E0QTFDRUM0Nzk3NUM5MkMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjdGMUFCMTU0QzMzMTFFN0E0QTFDRUM0Nzk3NUM5MkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz72S8QWAAAElklEQVR42txaa2xMQRSerlKtVxA0CBFt0W754RWPeLZCI/jVhKQJRSOhP2jRVoUERaIiCOpRjUSFH14hafTh1YdGJBpt0RIpqkJI0Khn6pzsd5Oxdru73Tt373WSL7ezM/fe8803M3fOmQa13xKqLZmQRhhNeELIJeSrfKFNMaGthFOEaLwrGuVsq5IaStiCv7MIw6RyNuotRyqTEEK4S9hNeEXIQTkERJVYkKI5xSo8g/NzCWVS3RxCKeE7IYLw2ipKZYBQuRMhgXI56jOsotQQwnM4HQdVnI3VK4FaIwnNZlcqU1Kp1E2bUkmtTLMrNQRzqTshHmq4M1axmPANc6vZrEplgFC5B0IC9eVon2FWpWSV5kEFT8Zq3tBbLZsClSq8JCTQrgL3bTabUp1RyZVavBK+MYtSu0Co0kdCmlqVuD8nUEqFEyIlTMR3p50wm3C7E37MJNxkf7Dc3yc0SnirB6mBmLijcNUQRejpov0vzIn9fnTwBsJeQrCLulZCA4a4hqe4vnNHKpSQTlgEx3t38HIm0IQHci/WE4oIL3QYOSMI8xGiRKIjh7shqtlnEL5K2EdoY1LdsXOeIDX8TXgJxxskAo1w/qcwzrqCbKRENApXDme6SG0fEKZzD6SA0HuoVQ3Hfwhz2E90bIOLum4gPBkqjWc+wVhS2fYQzghr2Q/MLUZ/zOl4XtLb0KCvsLb1w7WNSV1GYRMh0aKEEqUdyUUmdQ7DjsdnISHJYoSS4HdX8Dhvw0czGVkeXkkKCKstQigF/rLf+eDRbpOWcCZyBFunPEKqyQmxf8fgL/u9Cjz+2vuxYuuwNPJ25aCeO2edbTP8Yz9z4Xe7uw0tV2wk7JSW+W0mI7Qdfmkb6XSZUEe7dM6sZrl4SKBN7mROjGb7GnpwAnI9ekGWOxAmTwf2J62jMCXYw8MOIHg7gonJ2Z81znIbQCgPCxm/dy3hqL9BIq8wK7CypGBoGmlbQYjfv9ITIV+DRO1b9pUwAFfVFoaNdhiInVQR+X5BkGgn1BlAKoZQiyCxl4ocRQ/0GNtHg4beB0mxHipIxaA9E2oxiNRbELPh/UpIsT0yeKGoxTVaBSl7gEhp74tVQSrWqef+K1J1BpOqV0WKQ+XwAA+/cClk14WU1kucNvtkMKlPeK/XavlKqjMqJRAuEWpwTVA9r7wlZXca394Y58f5UO06YQlhLK5c5uObWarmlbekfPlGTRKOoxnegE3DHpGj0wWIqrk8VTgOBIrR3lulYoweftyG0233hCNByonGw8KRHubotAhRdQR+5/o4tL/iQYVHTiPGb1KDCX2w9X/sop7z22cJDwmL0e60cOS7U11sqVrwexTacftFuL8Qz3O2x2jXB/74Tcom5S9Cpd85OX8c430ZfruA3uQwpcnDc5vQzo772JbieSfwfM1CpcC0i16hRw0m+h3ENFPgUAjqryFfUOPH0j0OCZ+FKPM/jnAurwrprxn48Nv1IsWnCiXi3wO3MpCp0vG7xB22QzhOJ2VrxRys1jNI5AnO+bUxCAkKsIKpMj5qXU4YJBynGoeE45zMo/0RYAB4wC9Me7D6owAAAABJRU5ErkJggg==);
  background-size: contain;
  background-repeat: no-repeat;
  display: inline-block;
  line-height: 43px;
  position: static;
  color: #fff;
  padding-bottom: 5px;
  margin-right: 10px;
  margin-top: -2px;
}
.rating:hover {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAAyCAMAAADLPWP6AAAAsVBMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8Q9rufAAAAOnRSTlMAYvS7k5b5/vwaAcMXZ35xJZqpiN95P0T38AoQbTYuzB60QlwHSp+iPI2LxLAEX+o5hMG4IVfF1SvRoK3uYwAAAiBJREFUSMeVldd26yAQRUfFAsmxJdfEJe497k7d//9h9yFxlhwjXTFPMLA5AwyMSIY5H+rDEUurAlC1g8KA1qhFEFpRJcoiUqZkKTURkYmdmE9ZRETK+NZSlmJXKSux8InHn+YjT6G1lIVYSspCzOcl1XspJnYjVVhswftN/51FPvCwchoeqn3jbCu8hrN6MEw/Oqf60AVAx38GYw2AO6yfnOMV7laHHb5NNy9+5fVuzdeKf2lqAKAzrHZFZkNANz0/nie7nOh3yTz2vaYGhjPpc9gns8LJNkv2B/oyJrZ85jFjqXOypE7UZUrwZgW9BbxJtERPLaCpZhmJ7GqoSmGooljsRESiEqpfEOorStF3M9pAqxDUgnWUOpZCH2aV2wNvQeO/UOMupFjhR7lM5KNiw+HU8rDIfNR7nbu3KtpYYhzcbibUdcmoSy6fmdQnbsZyiux/5QFlDuSZTs6+DjybayrnHOrM3uhf5/6XPmuj3yMv9St4GZGvcqgVB9Pd96CXQ2UMt2nm5mGTtunBMU5359uv7TztGGN6ujU2KeEXAN5Ty2+oGagyv5/Oswfuer5xwfu92+lNWbtah8F3Y7BVBH4oIqEfoLZXtyl1QvRMRCRZKvRi9OMdLTSqnoiIzLQhTUN0T2RU+531Y0ldoWsjkZ5mdC/2xXlaCmA8+DMwGENQmp75MKW8C+AdDUNHD8A1Jn3iX5aTjCueLC9+Ku5/NvxD9byi+MMAAAAASUVORK5CYII=);
  color: #febf15;
}
.detail #content .movie-info b {
  font-size: 15px;
  cursor: pointer;
  margin-top: -30px;
}
.detail #content .movie-info b:hover {
  opacity: 1;
}
.details span {
  display: inline-block;
  margin: 0 5px;
}
.details span a {
  color: rgba(255, 255, 255, 0.7);
}
.details {
  border-top: 1px solid rgba(255, 255, 255, 0.07);
  padding-top: 20px;
}
.details span a:hover {
  color: #fff;
}
.detail #content .movie-info .movie-data span:before {
  display: none;
}
.detail #content .movie-info em span:hover {
  border: 1px solid rgba(255, 255, 255, 0.88);
  transition: 0.3s ease;
}
.detail .movie-actions .extra li#streaming-4k {
  border-radius: 5px;
  background-color: #c054c1;
}
.detail .movie-actions .extra li#streaming-4k a span {
  color: #fff;
}
.download a span {
  color: #fff;
}
.tv-details-seasons ol li[data-tab="season0"] {
  display: none;
}
.detail .movie-actions .extra li#download-button a:hover {
  color: #fff;
}
.movie-actions {
  margin-bottom: 20px;
}
.detail .movie-actions .extra li div span {
  color: rgba(255, 255, 255, 0.7);
}
.detail .movie-actions .extra li div span:hover {
  color: #fff;
}
.detail .movie-actions ul > li a:hover {
  color: #fff;
}
.tv-details-seasons ol li[data-tab="season0"] {
  display: none;
}
.modal-content,
.modal-overlay {
  height: 100%;
  width: 100%;
}
.modal-error,
.modal-image,
.modal-title-wrap {
  text-align: center;
}
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 99998;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.modal-overlay.modal-open {
  visibility: visible;
  opacity: 1;
}
.modal-wrap {
  position: absolute;
  top: 10%;
  bottom: 10%;
  left: 10%;
  right: 10%;
}
.modal-next,
.modal-prev {
  top: 50%;
  position: absolute;
}
.modal-title-wrap {
  position: absolute;
  bottom: 0;
  margin: auto;
  display: inline-block;
  width: 100%;
}
.modal-nav {
  display: none;
}
.modal-prev {
  left: 0;
}
.modal-next {
  right: 0;
}
.modal-close {
  position: absolute;
  top: 2%;
  right: 2%;
}
.modal-image img {
  max-width: 100%;
  max-height: 100%;
  width: auto;
  height: auto;
  vertical-align: middle;
}
.modal-content iframe,
.modal-error {
  width: 100%;
  height: 100%;
}
.modal-ajax,
.modal-inline {
  max-height: 100%;
  overflow: auto;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.modal-error {
  display: table;
  color: #fff;
  text-shadow: 0 1px 1px #000;
}
.modal-error p {
  display: table-cell;
  vertical-align: middle;
}
.modal-notouch .modal-effect-fade,
.modal-notouch .modal-effect-fadeScale,
.modal-notouch .modal-effect-fall,
.modal-notouch .modal-effect-slideDown,
.modal-notouch .modal-effect-slideLeft,
.modal-notouch .modal-effect-slideRight,
.modal-notouch .modal-effect-slideUp {
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.modal-effect-fadeScale .modal-wrap {
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: scale(0.7);
  -moz-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
}
.modal-effect-fadeScale.modal-open .modal-wrap {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.modal-effect-slideDown .modal-wrap,
.modal-effect-slideLeft .modal-wrap,
.modal-effect-slideRight .modal-wrap,
.modal-effect-slideUp .modal-wrap {
  -webkit-transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -moz-transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -ms-transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -o-transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.modal-effect-slideLeft .modal-wrap {
  -webkit-transform: translateX(-10%);
  -moz-transform: translateX(-10%);
  -ms-transform: translateX(-10%);
  transform: translateX(-10%);
}
.modal-effect-slideRight .modal-wrap {
  -webkit-transform: translateX(10%);
  -moz-transform: translateX(10%);
  -ms-transform: translateX(10%);
  transform: translateX(10%);
}
.modal-effect-slideLeft.modal-open .modal-wrap,
.modal-effect-slideRight.modal-open .modal-wrap {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0);
}
.modal-effect-slideDown .modal-wrap {
  -webkit-transform: translateY(-10%);
  -moz-transform: translateY(-10%);
  -ms-transform: translateY(-10%);
  transform: translateY(-10%);
}
.modal-effect-slideUp .modal-wrap {
  -webkit-transform: translateY(10%);
  -moz-transform: translateY(10%);
  -ms-transform: translateY(10%);
  transform: translateY(10%);
}
.modal-effect-slideDown.modal-open .modal-wrap,
.modal-effect-slideUp.modal-open .modal-wrap {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}
.modal-body-effect-fall .modal-effect-fall {
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  perspective: 1000px;
}
.modal-effect-fall .modal-wrap {
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  -webkit-transform: translateZ(300px);
  -moz-transform: translateZ(300px);
  -ms-transform: translateZ(300px);
  transform: translateZ(300px);
}
.modal-effect-fall.modal-open .modal-wrap {
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
.modal-skin-default.modal-overlay {
  background: #282c39;
}
.modal-skin-default .modal-content.modal-loading {
  background: url(https://i.imgur.com/cWmwHRS.gif) 50% 50% no-repeat;
}
.modal-skin-default .modal-nav {
  top: 10%;
  width: 8%;
  height: 80%;
  text-indent: -9999px;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  opacity: 0.5;
}
.modal-skin-default .modal-nav:hover {
  opacity: 1;
}
.modal-skin-default .modal-prev {
  background-image: url(https://i.imgur.com/5lvhOF7.png);
  border-radius: 0 3px 3px 0;
}
.modal-skin-default .modal-next {
  background-image: url(https://i.imgur.com/8CPLach.png);
  border-radius: 3px 0 0 3px;
}
.modal-skin-default .modal-close {
  display: block;
  background: url(https://i.imgur.com/DDhZS6k.png) 5px 5px no-repeat;
  width: 23px;
  height: 23px;
  text-indent: -9999px;
  padding: 5px;
  opacity: 0.5;
}
.modal-skin-default .modal-close:hover {
  opacity: 1;
}
.modal-skin-default .modal-title-wrap {
  bottom: -7%;
}
.modal-skin-default .modal-title {
  color: #fff;
  padding: 7px 15px;
  display: inline-block;
  cursor: pointer;
  background: #000;
  border-radius: 30px;
}
.modal-skin-default .modal-image img {
  background: #2f3444;
  background: none;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}
.modal-skin-default .modal-ajax,
.modal-skin-default .modal-inline {
  background: #2f3444;
  padding: 40px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}
@media (-webkit-min-device-pixel-ratio: 1.3),
  (-o-min-device-pixel-ratio: 2.6/2),
  (min--moz-device-pixel-ratio: 1.3),
  (min-device-pixel-ratio: 1.3),
  (min-resolution: 1.3dppx) {
  .modal-skin-default .modal-content.modal-loading {
    background-image: url(https://i.imgur.com/hSJUh5x.gif);
    background-size: 32px 32px;
  }
  .modal-skin-default .modal-prev {
    background-image: url(https://i.imgur.com/n9FqpVJ.png);
    background-size: 48px 48px;
  }
  .modal-skin-default .modal-next {
    background-image: url(https://i.imgur.com/jIcbVZe.png);
    background-size: 48px 48px;
  }
  .modal-skin-default .modal-close {
    background-image: url(https://i.imgur.com/71gOmg7.png);
    background-size: 16px 16px;
  }
}

</style>

@section('content')



<body class="detail">
        <div class="sidebar sb-left">
        </div>
        <div id="site-container">
          <main id="main">
            <header id="main-header">
              <div class="inner-container">
                <div class="sb-toggle-left">
                  <span class="menu-icon"></span>
                  <span class="menu-icon-text">Menu</span>
                </div>
                <a href="index.html" class="logo">CinepleXX</a>

              </div>
            </header>
            <section id="content">
              <div class="inner-container">
                <div class="movie-image">
                  <img src="{{$film->slika}}" alt="No Image ">
                  <div class="blue" id="buttonposter">
                    <p><i class="fa fa-play-circle" aria-hidden="true"></i>Play</p>
                  </div>
                </div>

                <iframe style="margin-left: 300px;" width="620" height="315"
                src="{{$film->url}}">
                </iframe>
                <div class="movie-info">

                  <h1 class="entry-title">{{$film->naziv}}</h1>

                  <div class="movie-data">
                    <div class="details">
                      <i class="hd">HD</i>
                      <span id='Rated'>PG-13</span><span><a href="" rel="tag">{{$film->zanr}}</a></span>|<span><a href="">by {{$film->reziser}}</a></span>|<span><a href="">{{$film->glumci}}</a></span>
                    </div>
                  </div>
                  <p class="movie-description">
                    <span  class="trama">{{$film->sadrzaj}}&hellip;</span>

                  </p>
                  <p style="display: inline-block; margin-right: 10px;">Projekcije:</p>
                @foreach($film->projekcije as $projekcija)

                <a style="display: inline-block; margin-right: 5px;" href="{{$film->id}}/{{$projekcija->id}}">
                <p>{{$projekcija->sala}}, datum -></p>
                </a>
                <p style="display: inline-block;">{{$projekcija->vreme}}</p>

                @endforeach
                </div>




                <div class="movie-actions">

                  <ul>

                    <li id="quality-button">

                      <audio id="audio" src="assets/images/click.mp3" autostart="false"></audio>
                    </li>
                  </ul>
                </div>
                <section class="disqus">
                  <div class="inner-container">
                    <div id="disqus_thread"></div>
                  </div>
                </section>
              </div>
              <div id="slideshow">
              </div>
            </section>
          </main>
        </div>



</body>

@endsection
