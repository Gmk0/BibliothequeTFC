import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
window.$ = require("jquery");
window.Swal = require("sweetalert2");

import "admin-lte/plugins/bootstrap/js/bootstrap.bundle";

import "admin-lte/plugins/toastr/toastr.min.js";
import "admin-lte/plugins/jquery-validation/jquery.validate.min.js";
import "admin-lte/plugins/jquery-validation/additional-methods.min.js";
