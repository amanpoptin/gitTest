/*Shortable table*/
jQuery.fn.addSortWidget = function(options) {
    var defaults = {
        img_asc: "assets/images/asc_sort.gif",
        img_desc: "assets/images/desc_sort.gif",
        img_nosort: "assets/images/no_sort.gif",
    };
    var options = $.extend({}, defaults, options),
        $destElement = $(this),
        is_asc = true;
    $("th", $destElement).each(function(index) { // to each header cell (index is useful while sorting)
        //data-nosort="true"
        if (typeof $(this).attr("data-nosort") == 'undefined' || $(this).attr("data-nosort") == 'false') {
            $("<img>") // create image that allows you to sort by specific column 
                .attr('src', options.img_nosort)
                .addClass('sorttable_img')
                .css({
                    cursor: 'pointer',
                    'margin-left': '10px',
                })
                .on('click', function() {
                    $(".sorttable_img", $destElement).attr('src', options.img_nosort);
                    $(this).attr('src', (is_asc) ? options.img_desc : options.img_asc);
                    is_asc = !is_asc;
                    var rows = $("tr", $destElement).not(":has(th)").get(); // save all rows (tr) into array (.get())
                    rows.sort(function(a, b) {
                        // sort array with table rows
                        var m = $("td:eq(" + index + ")", a).text(); // get column you needed by using index of th element (closure)
                        var n = $("td:eq(" + index + ")", b).text();
                        if (is_asc)
                            return m.localeCompare(n); // asc
                        else
                            return n.localeCompare(m); // desc
                    });
                    var tbody = ($destElement.has("tbody")) ? "tbody" : ""; // check if table has tbody
                    for (var i = 0; i < rows.length; i++) {
                        $(tbody, $destElement).append(rows[i]); // add each row to table (elements do not duplicate, just place to new position)
                    }
                })
                .appendTo(this); // add created sort image with click event handler to current th element
        }
    });
    return $destElement;
}

function connectPopups(Mid) {
    $("#" + Mid).modal('show');
    $("#" + Mid).on('shown.bs.modal', function(event) {
        $("#" + Mid + " .scroll-pane").jScrollPane();
    });
}

function poptinRedirect(url) {
    window.location.href = url;
}

function searchPoptinTable(inpSel, tblSel) {
    var input, filter, table, tr, td, i;
    input = document.getElementById(inpSel);
    filter = input.value.toUpperCase();
    table = document.getElementById(tblSel);
    tr = table.getElementsByTagName("tr");
    if (filter.length > 2) {
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            tds = tr[i].getElementsByTagName("td");
            if (tds.length > 0) {
                var trCheck = 0;
                for (j = 0; j < tds.length; j++) {
                    td = tr[i].getElementsByTagName("td")[j];
                    var text = td.innerText || td.textContent;
                    if (td) {
                        if (text.toUpperCase().indexOf(filter) > -1) {
                            trCheck += 1;
                        }
                    }
                }
                if (trCheck == 0) {
                    tr[i].style.display = "none";
                } else {
                    tr[i].style.display = "";
                }
            }
        }
    } else {
        for (i = 0; i < tr.length; i++) {
            tr[i].style.display = "";
        }
    }
}

function toggle_package(v) {
    $(".package-btn").removeClass("active");
    $(".package-btn.pt" + v).addClass("active");
    $(".psubact").addClass("hidepkgsub");
    $("." + v + "-package-sub").removeClass("hidepkgsub");;
}
var PoptinApp = function() {
    "use strict";
    // Handle App scripts
    var sidebarToggle = function() {
        $('[data-toggle="collapse"]').click(function() {
            if ($(this).parent('li').hasClass("child-open")) {
                $(this).parent('li').removeClass("child-open");
            } else {
                $(this).parent('li').addClass("child-open");
            }
        });
        $('.nav-sub-menu-container').on('shown.bs.collapse', function() {
            $(this).find(".scroll-pane").jScrollPane();
        });
    }
    var CodeSelect = function() {
        $('.plation-item input:radio').click(function() {
            if ($('.plation-item input:radio:checked').length > 0) {
                $(".plation-item").removeClass("platform-selected");
                $(this).parent(".plation-item").addClass("platform-selected");
                var datacode = $(this).attr("data-code");
                var captiontext = $(this).attr("data-captiontext");
                $("#instcaption").html(captiontext);
                $("#pixelCode").val(datacode);
            }
        });
        $('[data-clipboard-target]').click(function() {
            //  var copyTextId = $(this).attr("data-clipboard-target");
            var copyTextId = $(this).attr("data-tooltip-target");
            var clipboard = new Clipboard('.btn-copyclip');
            clipboard.on('success', function(e) {
                $(copyTextId).tooltip('show');
                console.log(copyTextId);
                setTimeout(function() {
                    $(copyTextId).tooltip('dispose');
                }, 3000);
                console.info('Action:', e.action);
                console.info('Text:', e.text);
                console.info('Trigger:', e.trigger);
                e.clearSelection();
            });
            clipboard.on('error', function(e) {
                console.error('Action:', e.action);
                console.error('Trigger:', e.trigger);
            });
        });
    }
    var advancedClick = function() {
        $(".btn-advanced").click(function() {
            if ($(this).hasClass('off')) {
                $(this).removeClass('off');
                $('body').removeClass('advanced-mode-off');
            } else {
                $(this).addClass('off');
                $('body').addClass('advanced-mode-off');
            }
        });
    }
    var poptionSumo = function() {
        $(".popTinSumoSelect").each(function() {
            var placeholderTxt = $(this).attr("data-placeholder");
            if (placeholderTxt != "") {
                $(this).SumoSelect({
                    placeholder: placeholderTxt
                });
            } else {
                $(this).SumoSelect();
            }
        });
    }
    var selectPicker = function() {
        if ($(".popTinSelect").length > 0) {
            //    minimumResultsForSearch: -1
            $(".popTinSelect").each(function() {
                var selItem = $(this);
                var selTypeCls = "";
                if (typeof $(this).attr("data-selectType") !== 'undefined') {
                    selTypeCls = $(this).attr("data-selectType");
                    $(this).find('.select2-selection').addClass(selTypeCls);
                    console.log(selTypeCls);
                }
                var isSearch = $(this).attr("data-search");
                if (isSearch == true) {
                    $(this).select2({
                        containerCssClass: selTypeCls,
                        templateResult: function(data, container) {
                            if (data.element) {
                                $(container).attr("data-indicator", $(data.element).attr("class"));
                            }
                            return data.text;
                        },
                        templateSelection: function(data, container) {
                            if (data.element) {
                                $(container).attr("data-indicator", $(data.element).attr("class"));
                            }
                            return data.text;
                        }
                    });
                } else {
                    $(this).select2({
                        minimumResultsForSearch: -1,
                        containerCssClass: selTypeCls,
                        templateResult: function(data, container) {
                            if (data.element) {
                                $(container).attr("data-indicator", $(data.element).attr("class"));
                            }
                            return data.text;
                        },
                        templateSelection: function(data, container) {
                            if (data.element) {
                                $(container).attr("data-indicator", $(data.element).attr("class"));
                            }
                            return data.text;
                        }
                    });
                }
            });
        }
    }
    var dashboardChart = function() {
        if ($("#dashboard-monthly-analytics").length) {
            var ctx = document.getElementById('dashboard-monthly-analytics').getContext("2d");
            ctx.fillStyle = "rgba(119, 97, 223, 0.06)";
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Arl', 'May', 'Jun', 'Jul', 'Aug'],
                    datasets: [{
                            label: "Visitors",
                            borderColor: 'rgba(255, 193, 99,0.9)',
                            backgroundColor: 'rgba(255, 193, 99,0.9)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 1,
                            fill: 'origin',
                            data: [0, 0, 30, 190, 0, 0, 50, 130]
                        },
                        {
                            label: "Views",
                            borderColor: 'rgba(255, 99, 118, 0.9)',
                            backgroundColor: 'rgba(255, 99, 118, 0.9)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 1,
                            fill: 'origin',
                            data: [200, 70, 45, 40, 30, 0, 190, 120]
                        },
                        {
                            label: "Conversions",
                            borderColor: 'rgba(81, 219, 238,0.9)',
                            backgroundColor: 'rgba(81, 219, 238,0.9)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 1,
                            fill: 'origin',
                            data: [0, 90, 115, 40, 150, 50, 60, 250]
                        }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        position: "top"
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                display: true,
                                beginAtZero: true,
                                fontColor: '#BDBDBD'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false,
                                color: 'transparent',
                                zeroLineColor: '#eeeeee'
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                drawBorder: false,
                                display: true,
                                color: 'rgba(189, 189, 189, 0.2)',
                            },
                            categoryPercentage: 0.5,
                            ticks: {
                                display: true,
                                beginAtZero: true,
                                stepSize: 20,
                                max: 300,
                                fontColor: '#BDBDBD'
                            }
                        }]
                    },
                },
                elements: {
                    point: {
                        radius: 0
                    }
                }
            });
            document.getElementById('js-legend').innerHTML = myChart.generateLegend();
        }
    }
    var CircluarStat = function() {
        var elemWi = $(".circular-card").width();
        var elemHi = (elemWi * 70) / 100;
        $(".draw-circle").each(function() {
            var pertext = $(this).attr("data-percentage");
            var color = $(this).attr("data-color1");
            var color2 = $(this).attr("data-color2");
            var text1 = $(this).attr("data-text1");
            var text2 = $(this).attr("data-text2");
            if (text1 != "" && text2 != "") {
                var txtelem = '<tspan   fill="' + color + '">' + text1 + '</tspan>/' + text2;
            } else {
                var txtelem = '';
            }
            $(this).circliful({
                animation: 1,
                animationStep: 5,
                animateInView: true,
                foregroundColor: color,
                backgroundColor: color2,
                foregroundBorderWidth: 25,
                backgroundBorderWidth: 25,
                percent: pertext,
                percentageTextSize: 0,
                halfCircle: 1,
                textColor: '#828282',
                text: txtelem,
                textBelow: true,
                boxwidth: elemWi,
                boxhight: elemHi
            });
        });
    }
    var poptinCollapsiblePanel = function() {
        $(document).on('click', '.panel-heading span.clickable', function(e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
        })
        $(".panel-body").find(".scroll-pane").jScrollPane();
    }
    var poptinTableShort = function() {
        $("table").each(function() {
            var SortChk = $(this).attr("data-sortTable");
            if (SortChk == "true") {
                $(this).addSortWidget();
            }
        });
    }
    var poptinPackages = function() {
        $('a.package-btn').click(function() {
            var dactive = $(this).attr("data-active");
            var bactive = $("#toogle-package").attr("data-active");
            if (dactive != bactive) {
                $("#toogle-package").attr("data-active", dactive);
                $("#toogle-package").trigger('click');
            }
        });
        $("#toogle-package").click(function() {
            var x = "";
            if ($("#toogle-package").hasClass("active")) {
                var v = "monthly";
                x = "yearly";
            } else {
                var v = "yearly";
                x = "monthly";
            }
            $("#toogle-package").attr("data-active", v);
            toggle_package(v);
        });
    }
    var templateFilterizr = function() {
        $(".card.setps-card").click(function() {
            var dType = $(this).find('a').attr("data-type");
            var fContainer = $(this).find('a').attr("data-fContainer");
            $(".card.setps-card").removeClass("selected");
            if ($(this).hasClass("selected")) {
                $(this).removeClass("selected");
                $(fContainer).hide();
            } else {
                $(this).addClass("selected");
                $(fContainer).show();
                $('.filtr-container').filterizr({
                    controlsSelector: '.fltr-controls'
                });
                $('.simplefilter li').click(function() {
                    $('.simplefilter li').removeClass('active');
                    $(this).addClass('active');
                });
            }
            return false;
        });
        $(".btn-template-preview").click(function() {
            var tFormat = $(this).attr("data-format");
            alert('Call template preview function here, template format is ' + tFormat);
        });
    }
    var previewOptions = function() {
        $(".btn-fullscreen").click(function() {
            if ($("body").hasClass("fullscreen-preview-mode")) {
                $("body").removeClass("fullscreen-preview-mode");
            } else {
                $("body").addClass("fullscreen-preview-mode");
            }
        });
        $(".preview-option-btns a").click(function() {
            var viewmode = $(this).attr("data-view");
            var container = $(this).attr("data-container");
            if (viewmode == "desktop-view") {
                $(container).removeClass("mobile-view");
                $(container).addClass(viewmode);
            } else {
                $(container).removeClass("desktop-view");
                $(container).addClass(viewmode);
            }
            $(".preview-option-btns a").removeClass("active");
            $(this).addClass("active");
        })
    }
    var toggleWidget = function() {
        $(".toggle-widget").click(function() {
            var actItem = $(this).attr("data-active");
            var selector = $(this).attr("data-selector");
            $("." + selector).removeClass("active");
            $("#" + actItem).addClass("active");
        });
        $(".toggleGrouped .btn").click(function() {
            var actItem = $(this).attr("data-active");
            var selector = $(this).attr("data-selector");
            $("." + selector + " .plugins-widget-area").removeClass("active");
            $("#" + actItem).addClass("active");
            $("." + selector + " .toggleGrouped .btn").removeClass("active");
            $(this).addClass("active");
        });
    }
    var poptinColorPicker = function() {
        $('[data-poptinWidget="colorPicker"]').each(function() {
            var selector = $(this).attr("data-WidgetSelector");
            if (typeof selector !== 'undefined') {
                var defaultColor = $(this).attr("data-defaultColor");
                $(selector).spectrum({
                    color: typeof defaultColor !== 'undefined' ? defaultColor : "#7761DF",
                    flat: true,
                    showInput: true,
                    showAlpha: true,
                    className: "full-spectrum",
                    showInitial: true,
                    showPalette: true,
                    showSelectionPalette: false,
                    maxSelectionSize: 10,
                    preferredFormat: "hex",
                    localStorageKey: "spectrum.demo",
                    move: function(color) {},
                    show: function() {},
                    beforeShow: function() {},
                    hide: function() {},
                    change: function() {},
                    palette: [
                        ["#FFFFFF ", "#F3F3F3", "#EEEEEE", "#dddddd", "#CCCCCC", "#999999", "#444444", "#000000"],
                        ["#F500FF", "#950BFF", "#1D0FFF", "#57FFFF", "#51FF00", "#FEFE00", "#F79800", "#F40000"],
                        ["#E8D1DC", "#D8D2EA", "#D1E2F4", "#D1E0E3", "#DAEAD2", "#FDF2CA", "#FAE5CC", "#F1CCCB"],
                        ["#BD7BA1", "#8D7CC5", "#77A8DE", "#7CA5B0", "#98C47A", "#FBD85D", "#F0B166", "#D86564"],
                        ["#A04D7A", "#664FA9", "#4A86C8", "#4E818F", "#71A84A", "#ECC117", "#DF902C", "#C30000"]
                    ]
                });
            }
        });
    }
    return {
        init: function() {
            sidebarToggle(), // Adds Class On Parent element
                CodeSelect(), //Installation code selection
                dashboardChart(), // Dashboard Chart
                poptionSumo(), // Sumo select dropdown with checkbox selections
                selectPicker(), //Select picker
                advancedClick(), // Advance Button click functions
                poptinCollapsiblePanel(), //For Collapsible panel
                poptinTableShort(), //For table Sorting
                CircluarStat(), // Circular stats
                templateFilterizr(), // Filtering Templates
                previewOptions(), //  functions for preview mode 
                toggleWidget(), // toggle widget
                poptinColorPicker(), // ColorPicker Widget
                poptinPackages(); // poptin packages
        }
    }
}();
$(document).ready(function() {
    PoptinApp.init();
});