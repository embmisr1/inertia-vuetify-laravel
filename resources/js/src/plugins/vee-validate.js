import Vue from "vue";
import { ValidationProvider, ValidationObserver, extend } from "vee-validate";
import {
    required,
    email,
    max,
    min,
    numeric,
    is_not,
    confirmed,
    min_value,
    max_value,
    required_if,
} from "vee-validate/dist/rules";

extend("required", {
    ...required,
    message: "{_field_} is required",
});

extend("payment", {
    validate(value, args) {
        return value <= args.max_value;
    },
    params: ["max_value"],
    message(value, args) {
        return ` Amount must less than or equal to ${args.max_value}`;
    },
});
extend("required_if", {
    ...required_if,
});
extend("is_not", {
    ...is_not,
});
extend("min_value", {
    ...min_value,
});

extend("confirmed", {
    ...confirmed,
});
extend("email", {
    ...email,
    message: "Email is not valid",
});
extend("max", {
    ...max,
});
extend("min", {
    ...min,
    message: "Too short",
});

extend("numeric", {
    ...numeric,
    message: "Field must be numeric",
});
extend("time_in", {
    validate(value, args) {
        return value < "24:00" && value <= args.time_out;
    },
    params: ["time_out"],
    message: "Time in is invalid",
});
extend("time_out", {
    validate(value, args) {
        return value < "24:00" && value >= args.time_in;
    },
    params: ["time_in"],
    message: "Time out is invalid",
});

extend("ot_in", {
    validate(value, args) {
        return args.ot_out
            ? new Date(args.ot_out).getTime() - new Date(value).getTime() > 0
            : true;
    },
    params: ["ot_out"],
    message: "Time in is invalid",
});
extend("ot_out", {
    validate(value, args) {
        return args.ot_in
            ? new Date(value).getTime() - new Date(args.ot_in).getTime() > 0
            : true;
    },
    params: ["ot_in"],
    message: "Time out is invalid",
});

extend("mm_dd_yy", {
    validate(value) {
        return String(new Date(value)) != "Invalid Date";
    },
    message: "Date is invalid",
});

extend("bith_date", {
    validate(value) {
        return (
            String(new Date(value)) != "Invalid Date" &&
            new Date().getTime() - new Date(value).getTime() > 0
        );
    },
    message: "Date is invalid",
});
extend("start_date", {
    validate(value, args) {
        return args.end_date
            ? new Date(args.end_date).getTime() - new Date(value).getTime() > 0
            : true;
    },
    params: ["end_date"],
    message: "{_field_} is invalid",
});
extend("end_date", {
    validate(value, args) {
        return args.start_date
            ? new Date(value).getTime() - new Date(args.start_date).getTime() >
                  0
            : true;
    },
    params: ["start_date"],
    message: "{_field_} is invalid",
});
extend("statstart_date", {
    validate(value, args) {
        return args.end_date
            ? new Date(args.end_date).getTime() - new Date(value).getTime() >= 0
            : true;
    },
    params: ["end_date"],
    message: "{_field_} is invalid",
});
extend("statend_date", {
    validate(value, args) {
        return args.start_date
            ? new Date(value).getTime() - new Date(args.start_date).getTime() >=
                  0
            : true;
    },
    params: ["start_date"],
    message: "{_field_} is invalid",
});
extend("ph_number", {
    validate(value) {
        return /(09)\d{9}/.test(value);
    },
    message: "Number is invalid",
});
Vue.component('ValidationObserver', ValidationObserver);
Vue.component('ValidationProvider', ValidationProvider);
