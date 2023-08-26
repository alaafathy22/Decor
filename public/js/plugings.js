$(document).ready(function () {
    var add_row = document.getElementById("add_row");
    var my_form = document.getElementById("my_form");
    // const queryString = window.location.search;
    // const urlParams = new URLSearchParams(queryString);
    // const product = urlParams.get("ID_value_establishment_type");

    if (add_row) {
        add_row.addEventListener("click", add_row_clicked, false);
    }

    function add_row_clicked(event) {
        event.preventDefault();
        var node = document.getElementById("row_Select0");
        var clone = node.cloneNode(node);
        clone.setAttribute(
            "id",
            "row_Select" + ($("div[class*='row_select_length']").length + 1)
        );
        button_delete = clone.querySelector("#button_delete");
        button_delete.setAttribute(
            "onclick",
            "removeRow(event," +
                ($("div[class*='row_select_length']").length + 1) +
                ")"
        );
        input_height = clone.querySelector("#height0");
        input_height.setAttribute(
            "id",
            "height" + ($("div[class*='row_select_length']").length + 1)
        );
        input_height.setAttribute(
            "onkeyup",
            "calc_dis(" +
                ($("div[class*='row_select_length']").length + 1) +
                ")"
        );
        input_width = clone.querySelector("#width0");
        input_width.setAttribute(
            "id",
            "width" + ($("div[class*='row_select_length']").length + 1)
        );
        input_width.setAttribute(
            "onkeyup",
            "calc_dis(" +
                ($("div[class*='row_select_length']").length + 1) +
                ")"
        );
        calc_dis_input = clone.querySelector("#calc_dis_input0");
        calc_dis_input.setAttribute(
            "id",
            "calc_dis_input" + ($("div[class*='row_select_length']").length + 1)
        );
        // var input_height = clone.querySelector("#height"+($("div[class*='row_select_length']").length + 1)),
        //     input_width = clone.querySelector("#width"+($("div[class*='row_select_length']").length + 1)),
        //     calc_dis_input = clone.querySelector("#calc_dis_input"+($("div[class*='row_select_length']").length + 1));

        input_height.value = " ";
        input_width.value = " ";
        calc_dis_input.value = " ";

        // console.log(input_height);
        // var len = ($("div[class*='row_select_length']").length + 1);
        // input_height = clone.document.getElementById("input[name='height']");
        // var input_height = document.getElementById("height");
        // input_height.setAttribute("id", "height" + len);
        // document.getElementById("height" + len).value = " ";
        // document.getElementById("width" + len).value = " ";
        // console.log(len);
        // len += 1;
        // console.log("after " + len);
        my_form.appendChild(clone);

        // var div = document.createElement("div");
        // div.setAttribute("class", "row_select");
        // div.setAttribute(
        //     "row_select",
        //     $("div[class*='row_select']").length + 1
        // );
        // div.setAttribute(
        //     "id",
        //     "row_Select" + ($("div[class*='row_select']").length + 1)
        // );
        // var label = document.createElement("label");
        // label.innerHTML = "نوع الغرفه";

        // var select = document.createElement("select");

        // var option1 = document.createElement("option");
        // option1.innerHTML = "ريسيبشن";

        // var option2 = document.createElement("option");
        // option2.innerHTML = "غرفه";

        // var option3 = document.createElement("option");
        // option3.innerHTML = "طرقه";

        // var option4 = document.createElement("option");
        // option4.innerHTML = "بلكونة";

        // var option5 = document.createElement("option");
        // option5.innerHTML = "حمام";

        // var option6 = document.createElement("option");
        // option6.innerHTML = "مطبخ";

        // select.setAttribute("class", "form-select");

        // select.appendChild(option1);
        // select.appendChild(option2);
        // select.appendChild(option3);
        // select.appendChild(option4);
        // select.appendChild(option5);
        // select.appendChild(option6);

        // var input1 = document.createElement("input");
        // var input2 = document.createElement("input");
        // var input_res_dis = document.createElement("input");
        // var input_id_establishment_type = document.createElement("input");

        // input1.setAttribute("name", "height[]");
        // input1.setAttribute("placeholder", "الطول بالمتر المربع");
        // input1.setAttribute(
        //     "id",
        //     "height" + ($("div[class*='row_select']").length + 1)
        // );
        // input1.setAttribute(
        //     "onkeyup",
        //     "dis(" + ($("div[class*='row_select']").length + 1) + ")"
        // );
        // input1.setAttribute("class", "form-control");

        // input2.setAttribute("name", "width[]");
        // input2.setAttribute("placeholder", "العرض بالمتر المربع");
        // input2.setAttribute(
        //     "id",
        //     "width" + ($("div[class*='row_select']").length + 1)
        // );
        // input2.setAttribute(
        //     "onkeyup",
        //     "dis(" + ($("div[class*='row_select']").length + 1) + ")"
        // );
        // input2.setAttribute("class", "form-control");

        // input_res_dis.setAttribute(
        //     "id",
        //     "res_dis" + ($("div[class*='row_select']").length + 1)
        // );
        // input_res_dis.setAttribute("name", "res_dis[]");
        // input_res_dis.setAttribute("type", "hidden");

        // input_id_establishment_type.setAttribute(
        //     "name",
        //     "establishment_type_id"
        // );
        // input_id_establishment_type.setAttribute("type", "hidden");

        // input_id_establishment_type.setAttribute("value", product);

        // var buttonDeleteRow = document.createElement("button");
        // buttonDeleteRow.setAttribute(
        //     "id",
        //     "button_Remove_row" + ($("div[class*='row_select']").length + 1)
        // );
        // buttonDeleteRow.setAttribute(
        //     "row_select",
        //     $("div[class*='row_select']").length + 1
        // );
        // buttonDeleteRow.setAttribute(
        //     "onclick",
        //     "removeRow(event," +
        //         ($("div[class*='row_select']").length + 1) +
        //         ")"
        // );
        // buttonDeleteRow.setAttribute("class", "btn btn-danger");
        // buttonDeleteRow.innerHTML = "حذف";
        // div.appendChild(label);
        // div.appendChild(select);
        // div.appendChild(input1);
        // div.appendChild(input2);
        // div.appendChild(input_res_dis);
        // div.appendChild(input_id_establishment_type);

        // div.appendChild(buttonDeleteRow);

        // my_form.appendChild(div);
    }
});
function calc_dis(i) {
    var height = $("#height" + i).val(),
        width = $("#width" + i).val();
    document.getElementById("calc_dis_input" + i).value = height * width;
}
