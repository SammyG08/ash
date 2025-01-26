const updateTime = function () {
    let timeVariable = document.querySelector(".realTime");
    let date = new Date();
    let hour = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
    let minute =
        date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
    let seconds =
        date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
    timeVariable.innerHTML = hour + ":" + minute + ":" + seconds;
    // console.log(hour + minute + seconds );

    setTimeout(updateTime, 1000);
};
document.addEventListener("DOMContentLoaded", function () {
    let timeVariable = document.querySelector(".realTime");
    let date = new Date();
    let hour = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
    let minute =
        date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
    let seconds =
        date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
    if (timeVariable) {
        timeVariable.innerHTML = hour + ":" + minute + ":" + seconds;
        setTimeout(updateTime, 1000);
    }
});

//variables for system
let displayMode = localStorage.getItem("mode");

const addRecordForm = document.querySelector(".addRecordForm");
// const viewRecordBtn = document.querySelector(".view-record-btn");
// const viewRecord = document.querySelector(".record-div");

const heading = document.querySelectorAll(".heading");
const footer = document.querySelectorAll(".footer");

const statusCard = document.querySelector(".statusCard");
const recordTable = document.querySelector(".record-table");

const cards = document.querySelectorAll(".cards");
const aFoodCards = document.querySelectorAll(".a-food-card");

const division = document.querySelectorAll(".division");
const progressSection = document.querySelectorAll(".card-progress");

const cardTitle = document.querySelectorAll(".card-title");
const title = document.querySelectorAll(".title");

const totalNum = document.querySelectorAll(".totalNum");
const fileCard = document.querySelectorAll(".fileCard");

const tables = document.querySelectorAll(".table");
const cohort = document.querySelectorAll(".cohort");

const navLink = document.querySelectorAll(".nav-link");
const initiativeName = document.querySelectorAll(".iniName");

const tableHeads = document.querySelectorAll(".table-head");
const recordNum = document.querySelectorAll(".record-number");

const genderNum = document.querySelectorAll(".number");
const gender = document.querySelectorAll(".gender");

const toggle = document.querySelector(".displayModeToggle");
const modeIcon = document.querySelector(".modeIcon");

const body = document.querySelector("body");
const addRecord = document.querySelector(".addRecord");

const changeCardColor = (card) => {
    card.classList.add("bg-dark");
};

const changeProgressSectionTextColor = (progress) => {
    progress.classList.add("text-white");
};

const changeCardTitleColor = (title) => {
    title.classList.add("text-secondary");
};

const changeTableColor = (table) => {
    table.classList.add("table-dark");
};

const changeTableHeadColor = (tableHead) => {
    tableHead.classList.add("bg-transparent");
};

const enableDark = () => {
    localStorage.setItem("mode", "dark");
    modeIcon.classList.add("bi-moon-stars-fill");

    body.classList.add("display");
    document.querySelector(".sideBar").classList.add("bg-dark");

    document.querySelector(".navHeader").classList.add("bg-dark");
    document.querySelector(".companyName").classList.add("text-white");

    document.querySelector(".icon").classList.add("text-white");
    document.querySelector(".logoImg").classList.add("d-none");

    cards.forEach(changeCardColor);
    cardTitle.forEach(changeCardTitleColor);

    initiativeName.forEach(function (name) {
        name.classList.add("text-secondary");
    });

    navLink.forEach(function (link) {
        link.classList.add("bg-dark");
    });

    //section js for specific routes
    if (window.location.toString().includes("dashboard")) {
        document.querySelector(".greetUser").classList.add("text-white");
        document.querySelector(".sessionType").classList.remove("text-muted");
        document.querySelector(".dashboard").classList.add("text-white");
        progressSection.forEach(changeProgressSectionTextColor);
        tables.forEach(changeTableColor);
        tableHeads.forEach(changeTableHeadColor);
        document.querySelector(".userIcon").classList.add("text-white");
    }

    if (addRecord) {
        recordNum.forEach(function (number) {
            number.classList.add("text-light");
            number.classList.add("bg-secondary");
        });

        title.forEach(function (name) {
            name.classList.add("light-text");
        });

        genderNum.forEach(function (num) {
            num.classList.remove("text-muted");
            num.classList.add("text-secondary");
        });

        gender.forEach(function (sex) {
            sex.classList.add("bg-light");
        });

        gender.forEach(function (sex) {
            sex.classList.add("text-success");
            sex.classList.remove("text-muted");
        });

        cohort.forEach(function (cohort) {
            cohort.classList.remove("text-dark");
            cohort.classList.add("text-light");
        });

        totalNum.forEach(function (total) {
            total.classList.add("text-secondary");
            total.classList.remove("text-muted");
        });

        footer.forEach(function (footerBorder) {
            footerBorder.classList.remove("border-dark");
            footerBorder.classList.add("border-secondary");
        });

        aFoodCards.forEach(function (card) {
            card.classList.add("bg-dark");
            card.classList.add("darkon");
            card.classList.remove("light");
            card.classList.remove("h-100");
        });

        division.forEach(function (div) {
            div.classList.remove("bg-light");
            div.classList.add("dark");
        });
    }

    if (heading.length > 0) {
        heading.forEach(function (head) {
            head.classList.remove("text-muted");
            head.classList.add("text-light");
        });
        recordTable.classList.add("table-dark");
        addRecordForm.classList.add("formcolordark");
        addRecordForm.classList.remove("formcolorlight");
    }
};

const disableDark = () => {
    localStorage.setItem("mode", "light");

    initiativeName.forEach(function (name) {
        name.classList.remove("text-secondary");
    });

    modeIcon.classList.remove("bi-moon-stars-fill");

    body.classList.remove("display");

    document.querySelector(".navHeader").classList.remove("bg-dark");
    document.querySelector(".companyName").classList.remove("text-white");

    document.querySelector(".icon").classList.remove("text-white");

    document.querySelector(".logoImg").classList.remove("d-none");
    document.querySelector(".sideBar").classList.remove("bg-dark");

    cards.forEach(function (card) {
        card.classList.remove("bg-dark");
    });

    cardTitle.forEach(function (title) {
        title.classList.remove("text-secondary");
        title.classList.add("text-muted");
    });

    navLink.forEach(function (link) {
        link.classList.remove("bg-dark");
    });

    //section js for specific routes
    if (window.location.toString().includes("dashboard")) {
        document.querySelector(".greetUser").classList.remove("text-white");
        document.querySelector(".dashboard").classList.remove("text-white");
        document.querySelector(".sessionType").classList.add("text-muted");
        document.querySelector(".userIcon").classList.remove("text-white");

        progressSection.forEach(function (progress) {
            progress.classList.remove("text-white");
        });

        tables.forEach(function (table) {
            table.classList.remove("table-dark");
        });

        tableHeads.forEach(function (tableHead) {
            tableHead.classList.remove("bg-transparent");
        });
    }

    if (addRecord) {
        recordNum.forEach(function (number) {
            number.classList.remove("text-light");
            number.classList.remove("bg-secondary");
        });

        title.forEach(function (name) {
            name.classList.remove("light-text");
            // name.classList.add("text-muted");
        });

        genderNum.forEach(function (num) {
            num.classList.remove("text-secondary");
        });

        gender.forEach(function (sex) {
            sex.classList.remove("bg-light");
        });

        gender.forEach(function (sex) {
            sex.classList.remove("text-success");
            sex.classList.add("text-muted");
        });

        cohort.forEach(function (cohort) {
            cohort.classList.remove("text-light");
            cohort.classList.add("text-dark");
        });

        totalNum.forEach(function (total) {
            total.classList.remove("text-secondary");
            total.classList.add("text-muted");
        });

        footer.forEach(function (footerBorder) {
            footerBorder.classList.remove("border-secondary");
            footerBorder.classList.add("border-dark");
        });

        aFoodCards.forEach(function (card) {
            card.classList.remove("bg-dark");
            card.classList.remove("darkon");
            card.classList.add("light");
            card.classList.add("h-100");
        });

        division.forEach(function (div) {
            div.classList.remove("dark");
            div.classList.add("bg-light");
        });
    }
    if (heading) {
        heading.forEach(function (head) {
            head.classList.add("text-muted");
            head.classList.remove("text-light");
        });

        recordTable.classList.remove("table-dark");
        addRecordForm.classList.remove("formcolordark");
        addRecordForm.classList.add("formcolorlight");
    }
};

//change display mode logic
if (displayMode === "dark") {
    enableDark();
}

if (toggle) {
    toggle.addEventListener("click", () => {
        displayMode = localStorage.getItem("mode");
        if (displayMode === "light") {
            enableDark();
        } else {
            disableDark();
        }
    });
}

//upload agrifood excel sheet
$(document).ready(function () {
    $(".agrifoodform").submit(function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: $(this).data("url"),
            type: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                if (response.status) {
                    showUploadStatus("Upload successful", response.records);
                } else {
                    showUploadStatus(
                        "Upload unsuccessful please try again later.",
                        response.records
                    );
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: ", xhr.responseText);
            },
        });
    });
});
function showUploadStatus(status, records) {
    let responseHeader = document.querySelector(".statusHeader");
    document.querySelector(".agrifoodform").reset();
    addRecordForm.classList.add("d-none");
    responseHeader.style.display = "grid";
    statusCard.style.display = "grid";
    responseHeader.innerHTML = status;
    records.forEach(updateRecords);
    //show upload status for 3seconds
    setTimeout(function () {
        responseHeader.style.display = "none";
        statusCard.style.display = "none";
        addRecordForm.classList.remove("d-none");
    }, 3000);
}
//update agrifood table records on successfull upload of excel sheet
function updateRecords(record) {
    const tbody = document.querySelector(".tbody");
    const child = document.querySelectorAll(".records");
    const tr = document.createElement("tr");
    tr.innerHTML = `
    <td class=text-secondary> ${record.other_names} </td>
    <td class=text-secondary> ${record.age} </td>
    <td class=text-secondary> ${record.gender} </td>
    <td class=text-secondary> ${record.whatsapp_number} </td>
    <td class=text-secondary> ${record.email} </td>
    <td class=text-secondary> ${record.residential_address} </td>
    <td class=text-secondary> ${record.occupation} </td>
    <td class=text-secondary> ${record.surname} </td>
    <td class=text-secondary> ${record.business_name} </td>
    <td class=text-secondary> ${record.work_location} </td>
    <td class=text-secondary> ${record.type_of_business} </td>
    <td class=text-secondary> ${record.nature_of_business} </td>
    <td class=text-secondary> ${record.business_sector} </td>
    <td class=text-secondary> ${record.num_of_years_worked_in_business} </td>
    <td class=text-secondary> ${record.do_you_have_employees} </td>
    <td class=text-secondary> ${record.num_of_employees} </td>
    <td class=text-secondary> ${record.do_you_plan_on_expansion} </td>
    <td class=text-secondary> ${record.what_support_or_assistance_needed_to_support_this_expansion} </td>
    <td class=text-secondary> ${record.agrifood_program_rating} </td>
    <td class=text-secondary> ${record.recommendation_for_improving_program} </td>
    `;
    child.forEach(function (node) {
        console.log(node.parentElement.nodeName);
        tbody.removeChild(node);
    });
    tbody.appendChild(tr);
}
