<html lang="en">

<head>

    <meta charset="utf-8">
    <title>DPU CT648</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- support facebook moderation -->
    <meta property="fb:admins" content="129982580378550">
    <meta property="fb:app_id" content="129982580378550">

    <!-- KILL SKYPE ADD ON -->
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

    <script src="https://browser.sentry-cdn.com/4.6.2/bundle.min.js"></script>
    <script id="sentry">
        (function(c, t, u, n, p, l, y, z, v) {
            function e(b) {
                if (!w) {
                    w = !0;
                    var d = t.getElementsByTagName(u)[0],
                        a = t.createElement(u);
                    a.src = z;
                    a.crossorigin = "anonymous";
                    a.addEventListener("load", function() {
                        try {
                            c[n] = q;
                            c[p] = r;
                            var a = c[l],
                                d = a.init;
                            a.init = function(a) {
                                for (var b in a) Object.prototype.hasOwnProperty.call(a, b) && (v[b] = a[b]);
                                d(v)
                            };
                            B(b, a)
                        } catch (A) {
                            console.error(A)
                        }
                    });
                    d.parentNode.insertBefore(a, d)
                }
            }

            function B(b, d) {
                try {
                    for (var a = 0; a < b.length; a++)
                        if ("function" === typeof b[a]) b[a]();
                    var f = m.data,
                        g = !1,
                        h = !1;
                    for (a = 0; a < f.length; a++)
                        if (f[a].f) {
                            h = !0;
                            var e = f[a];
                            !1 === g && "init" !== e.f && d.init();
                            g = !0;
                            d[e.f].apply(d, e.a)
                        }! 1 === h && d.init();
                    var k = c[n],
                        l = c[p];
                    for (a = 0; a < f.length; a++) f[a].e && k ? k.apply(c, f[a].e) : f[a].p && l && l.apply(c, [f[a].p])
                } catch (C) {
                    console.error(C)
                }
            }
            for (var g = !0, x = !1, k = 0; k < document.scripts.length; k++)
                if (-1 < document.scripts[k].src.indexOf(y)) {
                    g = "no" !== document.scripts[k].getAttribute("data-lazy");
                    break
                } var w = !1,
                h = [],
                m = function(b) {
                    (b.e || b.p || b.f && -1 < b.f.indexOf("capture") || b.f && -1 < b.f.indexOf("showReportDialog")) && g && e(h);
                    m.data.push(b)
                };
            m.data = [];
            c[l] = {
                onLoad: function(b) {
                    h.push(b);
                    g && !x || e(h)
                },
                forceLoad: function() {
                    x = !0;
                    g && setTimeout(function() {
                        e(h)
                    })
                }
            };
            "init addBreadcrumb captureMessage captureException captureEvent configureScope withScope showReportDialog".split(" ").forEach(function(b) {
                c[l][b] = function() {
                    m({
                        f: b,
                        a: arguments
                    })
                }
            });
            var q = c[n];
            c[n] = function(b, d, a, f, e) {
                m({
                    e: [].slice.call(arguments)
                });
                q && q.apply(c, arguments)
            };
            var r = c[p];
            c[p] = function(b) {
                m({
                    p: b.reason
                });
                r && r.apply(c, arguments)
            };
            g || setTimeout(function() {
                e(h)
            })
        })
        // (window, document,
        //     "script", "onerror", "onunhandledrejection", "Sentry", "20b9cdb407dd4026b2a75c903c719554", "https://browser.sentry-cdn.com/4.6.2/bundle.min.js", {
        //         "dsn": "https://20b9cdb407dd4026b2a75c903c719554@sentry.wixpress.com/86"
        //     });
    </script>


    <script type="text/javascript">
        (function() {
            function sendBeacon(url) {
                let sent = false
                try {
                    sent = navigator.sendBeacon(url)
                } catch (e) {}
                if (!sent) {
                    (new Image()).src = url
                }
            }

            const urlParams = new URLSearchParams(window.location.search);
            const origin = urlParams.get('dsOrigin');
            const editorSessionId = urlParams.get('editorSessionId');
            const is_rollout = 0;
            const is_RolloutParam = '&is_rollout=' + is_rollout;
            const fedOpsAppName = 'tb-ds';
            window.fedops = window.fedops || {};
            window.fedops.apps = window.fedops.apps || {};
            const startLoadTime = Math.round(window.performance && window.performance.now && window.performance.now() || 0)
            window.fedops.apps[fedOpsAppName] = {
                startLoadTime
            };
            const checkVisibility = {}

            window.wixBiSession = {
                initialTimestamp: Date.now(),
                is_rollout: is_rollout,
                origin: origin,
                is_dac_rollout: 0,
                ...(checkVisibility)
            }

            const ownerIdParam = '&ownerId=2287533f-08de-437a-b33b-c3ec3996ccad'
            const userIdParam = ''
            const sessionTagging = '&msid=d23221cd-5039-4c30-8e03-a66a0523e815' + ownerIdParam + userIdParam + '&_visitorId=' + editorSessionId + '&session_id=' + editorSessionId + '&esi=' + editorSessionId;
            const dm_version = '1.14184.0'
            const url = '//frog.wix.com/ds-performance?src=72&evid=31&appName=' + fedOpsAppName + sessionTagging + is_RolloutParam + '&origin=' + origin + '&ts=0&ms=' + startLoadTime + '&dm_version=' + dm_version + '&isDraft=true' + '&is_dac_rollout=0' + '&experience=editor2';
            const suppressBIQueryParam = urlParams.get('suppressbi')
            const shouldSuppressBI = suppressBIQueryParam === 'true' || suppressBIQueryParam === true
            if (!shouldSuppressBI) {
                sendBeacon(url);
            }
        })();
    </script>

    <script src="https://static.parastorage.com/services/third-party/requirejs/2.1.15/require.min.js?v=2"></script>

    <script type="text/javascript">
        var clientSideRender = true;
        var santaBase = 'https://static.parastorage.com/services/santa/1.11783.0';
        var boltBase = 'https://static.parastorage.com/services/wix-bolt/1.7777.0';
        var thunderboltBase = 'https://static.parastorage.com/services/wix-thunderbolt/1.14123.0';
        var dsBoltBase = 'https://static.parastorage.com/services/document-management/1.14184.0';
        var dmBase = 'https://static.parastorage.com/services/document-management/1.14184.0';
    </script>


    <link rel="shortcut icon" type="image/x-icon" href="https://www.wix.com/favicon.ico">


    <!-- GLOBALS -->
    <script type="text/javascript">
        var santaModels = true;
        var rendererModel = {
            "metaSiteId": "d23221cd-5039-4c30-8e03-a66a0523e815",
            "siteInfo": {
                "documentType": "UGC",
                "applicationType": "HtmlWeb",
                "siteId": "58a5bb32-b56b-42ae-9bb5-9e1d04949ced",
                "siteTitleSEO": ""
            },
            "clientSpecMap": {
                "14": {
                    "type": "editor",
                    "applicationId": 14,
                    "appDefinitionId": "13ee94c1-b635-8505-3391-97919052c16f",
                    "dashboardUrl": "https:\/\/www.wix.com\/quotes",
                    "dashboardDefaultHeight": 200,
                    "settingsWidth": 0,
                    "settingsHeight": 0,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 0,
                        "width": 0,
                        "abTest": false,
                        "version": 1
                    },
                    "vendorProducts": [],
                    "preInstalled": true,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": null,
                    "components": [{
                        "componentId": "2b2713df-40eb-4a37-8c0b-299b47b9e6f0",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "2b2713df-40eb-4a37-8c0b-299b47b9e6f0"
                    }, {
                        "componentId": "3cddf38e-f2ec-4258-8452-8fdfe1d88240",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "invoices"
                        },
                        "name": "Manage Invoices"
                    }, {
                        "componentId": "e67996c9-bcb1-494e-9d36-9d691585427a",
                        "type": "DASHBOARD",
                        "data": {
                            "url": "http:\/\/www.wix.com\/quotes",
                            "published": true
                        }
                    }, {
                        "componentId": "3fb510fc-5391-41c3-809f-bbfbed7c05f6",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "reports"
                        },
                        "name": "invoices-summary-reports-bm-pages-reports"
                    }, {
                        "componentId": "435735f8-0ebf-4db8-8854-b0302d396070",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "435735f8-0ebf-4db8-8854-b0302d396070"
                    }, {
                        "componentId": "185ec7ac-483d-4182-b319-6ef0c4c98238",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Invoice paid"
                    }, {
                        "componentId": "519e07bf-7a66-45e4-a3d9-30cc69162b7b",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "products\/list"
                        },
                        "name": "invoices-items-services-bm-pages-list"
                    }, {
                        "componentId": "dbdf2029-7c94-4bce-abc5-ced2e357aae0",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Request payment"
                    }, {
                        "componentId": "7e54e095-014c-47de-8a49-c2c51ea2fe0e",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Invoice is paid"
                    }, {
                        "componentId": "645cab49-c2aa-4300-80f4-ea08a9d593f3",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Invoice sent"
                    }, {
                        "componentId": "f038a711-867f-4e67-aa86-1ea6158c8f5b",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "tax-summary"
                        },
                        "name": "invoices-summary-reports-bm-pages-tax-summary"
                    }, {
                        "componentId": "fd0c7219-5e06-4699-8c36-3ed3d1318771",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {},
                        "name": "CRM_FINANCIAL_WIDGETS.pages.index"
                    }, {
                        "componentId": "206cae35-8a68-460b-8d74-6cf720110f7c",
                        "type": "BACK_OFFICE_EXTENSION",
                        "data": {},
                        "name": "206cae35-8a68-460b-8d74-6cf720110f7c"
                    }, {
                        "componentId": "e0108e9d-6a07-4540-9c9f-ea8a4a75087f",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "invoice\/new"
                        },
                        "name": "crm-financial.pages.invoice.form"
                    }, {
                        "componentId": "445115c0-6d55-4016-b462-b186c3eb8bef",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Invoice is overdue"
                    }, {
                        "componentId": "b94dd6e3-764c-4e45-b723-96767e73a1c2",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "settings"
                        },
                        "name": "invoices-settings"
                    }, {
                        "componentId": "5b0de1d2-0402-482c-9f0c-3f3f39ef430a",
                        "type": "BACK_OFFICE_EXTENSION_MENU_ITEM",
                        "data": {}
                    }, {
                        "componentId": "f267a040-35af-4d5a-ac53-59d8d649cfe0",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Invoice issued"
                    }, {
                        "componentId": "26b49d39-da6e-4806-8b39-ced6c1969817",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "26b49d39-da6e-4806-8b39-ced6c1969817"
                    }, {
                        "componentId": "b37dc480-cc8f-42b6-9409-d67459e60d5f",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Invoice overdue"
                    }, {
                        "componentId": "53c7c4c1-215f-4b09-9870-9451afb9132d",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "crm-financial-widgets-components-createinvoicesproductmodal"
                    }, {
                        "componentId": "ad02cff6-c2ce-4061-bf22-cd87a1d1ce9a",
                        "type": "BACK_OFFICE_EXTENSION_MENU_ITEM",
                        "data": {}
                    }, {
                        "componentId": "161f2ec6-eeba-4340-a6a6-d00dd6b1c53a",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "revenue-summary"
                        },
                        "name": "invoices-summary-reports-bm-pages-revenue-summary"
                    }],
                    "appDefinitionName": "Wix Invoices",
                    "instance": "7l7qplCtpkd1R-KAAtiuU5m1Hn1fH0HIMCMB2rFj4B4.eyJpbnN0YW5jZUlkIjoiY2Q2MmMxM2UtM2M0OC00ZTE2LTg5YWMtYWVlYTQ4ZDJjMzE5IiwiYXBwRGVmSWQiOiIxM2VlOTRjMS1iNjM1LTg1MDUtMzM5MS05NzkxOTA1MmMxNmYiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJiaVRva2VuIjoiMWY1MGUwZjMtNmM3MS0wMjI2LTA3YWYtMDg4MDRkZjEyYjBjIiwic2l0ZU93bmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJzaXRlTWVtYmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJleHBpcmF0aW9uRGF0ZSI6IjIwMjQtMDYtMTVUMTE6MjY6NDIuNzIwWiIsImxvZ2luQWNjb3VudElkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwicGFpIjpudWxsLCJscGFpIjpudWxsLCJhb3IiOnRydWV9",
                    "instanceId": "cd62c13e-3c48-4e16-89ac-aeea48d2c319",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                },
                "20": {
                    "type": "editor",
                    "applicationId": 20,
                    "appDefinitionId": "8ea9df15-9ff6-4acf-bbb8-8d3a69ae5841",
                    "settingsWidth": 600,
                    "settingsHeight": 750,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 750,
                        "width": 600,
                        "abTest": false,
                        "version": 2
                    },
                    "vendorProducts": [],
                    "preInstalled": false,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": {
                        "isStandalone": true,
                        "semanticVersion": "^0.1.0"
                    },
                    "components": [],
                    "appDefinitionName": "Financial Settings",
                    "instance": "HxTA2sUfJo6SbkFFIJEdCFqUAATZ72DpZOIs9TdJPPo.eyJpbnN0YW5jZUlkIjoiYTUyMTU5OTgtZjdlOC00YWI0LTg1YzktZGZiYjBkNDlkOGZlIiwiYXBwRGVmSWQiOiI4ZWE5ZGYxNS05ZmY2LTRhY2YtYmJiOC04ZDNhNjlhZTU4NDEiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJiaVRva2VuIjoiNzcxMzc4NTUtYTdkMS0wNjg0LTBiY2EtNzlkMTA4NmEzMGViIiwic2l0ZU93bmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJzaXRlTWVtYmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJleHBpcmF0aW9uRGF0ZSI6IjIwMjQtMDYtMTVUMTE6MjY6NDIuNzIwWiIsImxvZ2luQWNjb3VudElkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwicGFpIjpudWxsLCJscGFpIjpudWxsLCJhb3IiOnRydWV9",
                    "instanceId": "a5215998-f7e8-4ab4-85c9-dfbb0d49d8fe",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                },
                "21": {
                    "type": "editor",
                    "applicationId": 21,
                    "appDefinitionId": "141fbfae-511e-6817-c9f0-48993a7547d1",
                    "dashboardUrl": "https:\/\/www.wix.com\/",
                    "dashboardDefaultHeight": 200,
                    "settingsWidth": 0,
                    "settingsHeight": 0,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 0,
                        "width": 0,
                        "abTest": false,
                        "version": 1
                    },
                    "vendorProducts": [],
                    "preInstalled": true,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": {
                        "permissionsEnforced": false,
                        "blocksPermissionsEnforced": false,
                        "isStandalone": true,
                        "semanticVersion": "^0.39.0"
                    },
                    "components": [{
                        "componentId": "00db31f3-8f52-4c84-af2b-e12e11fc9ebf",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "00db31f3-8f52-4c84-af2b-e12e11fc9ebf"
                    }, {
                        "componentId": "095d8bd2-6d3e-46be-a3c6-3edb9ca31a46",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "095d8bd2-6d3e-46be-a3c6-3edb9ca31a46"
                    }, {
                        "componentId": "1ae6068f-0fe6-4986-975a-3565f4147fbe",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {},
                        "name": "engage-crazy-chat-lazy"
                    }, {
                        "componentId": "1c74706d-404a-4d18-96cd-45be633ee197",
                        "type": "BACK_OFFICE_EXTENSION",
                        "data": {},
                        "name": "1c74706d-404a-4d18-96cd-45be633ee197"
                    }, {
                        "componentId": "3493769c-b629-41c2-836e-442aa32aa5aa",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Chat message sent"
                    }, {
                        "componentId": "49d25231-da74-4897-8dda-88b0f067bfb9",
                        "type": "DASHBOARD",
                        "data": {
                            "url": "http:\/\/www.wix.com\/",
                            "embedded": true
                        },
                        "name": ""
                    }, {
                        "componentId": "541e02f0-1006-44bc-b725-5fbe36f22189",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Show in Inbox"
                    }, {
                        "componentId": "5f1891b9-abf5-4972-b9fc-ac2502cd766a",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "5f1891b9-abf5-4972-b9fc-ac2502cd766a"
                    }, {
                        "componentId": "5f19c4ef-7296-4ba9-a504-3031ef654b80",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "New visitor on site"
                    }, {
                        "componentId": "60c582bf-f74d-4a10-a213-8b2452a9d0d7",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "60c582bf-f74d-4a10-a213-8b2452a9d0d7"
                    }, {
                        "componentId": "62331e2b-cb51-49e9-b8dd-4ed49951b6ba",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "62331e2b-cb51-49e9-b8dd-4ed49951b6ba"
                    }, {
                        "componentId": "6e653e4a-0dd9-49ea-8e1b-5c98242b20bf",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "6e653e4a-0dd9-49ea-8e1b-5c98242b20bf"
                    }, {
                        "componentId": "7e821d4e-2ad8-463a-b633-63ba8546e61c",
                        "type": "BACK_OFFICE_SIDEBAR_CATEGORY",
                        "data": {},
                        "name": ""
                    }, {
                        "componentId": "82173607-f86a-4045-b27a-187bc9f18a0a",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "82173607-f86a-4045-b27a-187bc9f18a0a"
                    }, {
                        "componentId": "9001029c-4b88-435d-ac52-51b5c4aab850",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Send a chat message"
                    }, {
                        "componentId": "9139f2b9-a280-4218-80df-01c91969cc89",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "inbox\/settings"
                        },
                        "name": "inbox-settings-lazy"
                    }, {
                        "componentId": "9ac22098-89d4-43a0-8ade-95542d12cb0c",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "9ac22098-89d4-43a0-8ade-95542d12cb0c"
                    }, {
                        "componentId": "dffe26d8-24c2-423c-a342-143c1754d83b",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "New messages"
                    }, {
                        "componentId": "e46bd0cb-7826-4330-9d42-3f6ef091aee0",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "e46bd0cb-7826-4330-9d42-3f6ef091aee0"
                    }, {
                        "componentId": "e69c3e73-6b30-4384-b471-c00d1e6f0d06",
                        "type": "BACK_OFFICE_EXTENSION",
                        "data": {},
                        "name": "e69c3e73-6b30-4384-b471-c00d1e6f0d06"
                    }, {
                        "componentId": "ecada1b5-587e-4be4-9030-5674d547c5c4",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "channels\/settings"
                        },
                        "name": "inbox-settings-pages-communication-channels"
                    }, {
                        "componentId": "ff08f61b-ff46-4745-9047-50028ea43d4d",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Chat message received"
                    }],
                    "appDefinitionName": "Inbox",
                    "instance": "XQt-KWsAZwW4fhSs44I9KcNpoUMzK5Jq_OzMufUCtKI.eyJpbnN0YW5jZUlkIjoiZDQ1NGZlN2UtYWJhNS00NWMwLTg2MTAtOTJjNjI4MWNjMGMxIiwiYXBwRGVmSWQiOiIxNDFmYmZhZS01MTFlLTY4MTctYzlmMC00ODk5M2E3NTQ3ZDEiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJiaVRva2VuIjoiMDY2NmRmYjMtZmI5Yy0wOWYwLTA4MTMtMzRhYzJkM2YyOGQ0Iiwic2l0ZU93bmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJzaXRlTWVtYmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJleHBpcmF0aW9uRGF0ZSI6IjIwMjQtMDYtMTVUMTE6MjY6NDIuNzIwWiIsImxvZ2luQWNjb3VudElkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwicGFpIjpudWxsLCJscGFpIjpudWxsLCJhb3IiOnRydWV9",
                    "instanceId": "d454fe7e-aba5-45c0-8610-92c6281cc0c1",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                },
                "13": {
                    "type": "sitemembers",
                    "applicationId": 13,
                    "collectionType": "Open",
                    "collectionFormFace": "Register",
                    "collectionExposure": "Public",
                    "smcollectionId": "d08ccaa4-2d56-48b2-9105-4a3f6adf2ea6"
                },
                "17": {
                    "type": "ignored",
                    "applicationId": 17
                },
                "22": {
                    "type": "editor",
                    "applicationId": 22,
                    "appDefinitionId": "7efa9936-86f7-44c6-880b-7bae4e044a3d",
                    "settingsWidth": 600,
                    "settingsHeight": 750,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 750,
                        "width": 600,
                        "abTest": false,
                        "version": 2
                    },
                    "vendorProducts": [],
                    "preInstalled": false,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": {
                        "permissionsEnforced": false,
                        "blocksPermissionsEnforced": false,
                        "isStandalone": true,
                        "semanticVersion": "^0.25.0"
                    },
                    "components": [{
                        "componentId": "28ee4ecd-3c71-48f2-bdb9-2da8b31c51e0",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "28ee4ecd-3c71-48f2-bdb9-2da8b31c51e0"
                    }, {
                        "componentId": "4c169196-38f2-48cf-813a-2e2bdc2c943c",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {},
                        "name": "sms-bm.pages.index"
                    }, {
                        "componentId": "6ddf551f-7542-4195-b1db-bda128b2be41",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "6ddf551f-7542-4195-b1db-bda128b2be41"
                    }, {
                        "componentId": "70905ce3-c05f-4585-a886-beee22ab12e6",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "backoffice"
                        },
                        "name": "sms-bm.pages.backoffice"
                    }, {
                        "componentId": "8b69ee85-42f0-43a5-91f0-20e1e83434b2",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "purchase"
                        },
                        "name": "sms-bm.pages.purchase"
                    }, {
                        "componentId": "8d53d4e7-f8aa-47ec-83e4-3526fcdc04f6",
                        "type": "USER_NOTIFICATION",
                        "data": {},
                        "name": "New notification"
                    }, {
                        "componentId": "90bdce2f-5956-4a56-95a5-f44bcf3df974",
                        "type": "USER_NOTIFICATION",
                        "data": {},
                        "name": "New notification"
                    }, {
                        "componentId": "b0c4ecbe-617a-46d0-80f0-a68c03be86b0",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "b0c4ecbe-617a-46d0-80f0-a68c03be86b0"
                    }, {
                        "componentId": "bece3799-e9ec-4184-af84-22e3d0577447",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Sms Quota Notifications"
                    }, {
                        "componentId": "bf69e047-4693-44be-908e-4de3996ce6ea",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Send an SMS "
                    }, {
                        "componentId": "c2596a0a-92d7-44a6-9bf3-67bea2781244",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "c2596a0a-92d7-44a6-9bf3-67bea2781244"
                    }, {
                        "componentId": "e629ffba-1c08-49c1-8c2b-b307df8b21c8",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "number"
                        },
                        "name": "sms-bm.pages.number"
                    }, {
                        "componentId": "f4969f6e-debe-422b-91e1-a66fc5e133ef",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "f4969f6e-debe-422b-91e1-a66fc5e133ef"
                    }],
                    "appDefinitionName": "Wix SMS Provider",
                    "instance": "9ZJqoMTQ1hBJzZ2l2DBiy381dpjZ1t2sMBNwuTZVFs0.eyJpbnN0YW5jZUlkIjoiODlhNzI3YTctOTMyMS00NGQ3LTlmZTYtYTE0MjMxNzI5NjQxIiwiYXBwRGVmSWQiOiI3ZWZhOTkzNi04NmY3LTQ0YzYtODgwYi03YmFlNGUwNDRhM2QiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJiaVRva2VuIjoiNWI5NTA2NmEtYzMxOC0wOGU3LTExZTUtMDcyODM0NTE3ZTU0Iiwic2l0ZU93bmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJzaXRlTWVtYmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJleHBpcmF0aW9uRGF0ZSI6IjIwMjQtMDYtMTVUMTE6MjY6NDIuNzIwWiIsImxvZ2luQWNjb3VudElkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwicGFpIjpudWxsLCJscGFpIjpudWxsLCJhb3IiOnRydWV9",
                    "instanceId": "89a727a7-9321-44d7-9fe6-a14231729641",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                },
                "-666": {
                    "type": "metasite",
                    "metaSiteId": "d23221cd-5039-4c30-8e03-a66a0523e815",
                    "appDefId": "22bef345-3c5b-4c18-b782-74d4085112ff",
                    "instance": "aOYByifLjP4-yD88no1TXQhkNHgxx6p2XymFwowfnLk.eyJpbnN0YW5jZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1IiwiYXBwRGVmSWQiOiIyMmJlZjM0NS0zYzViLTRjMTgtYjc4Mi03NGQ0MDg1MTEyZmYiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJzaXRlT3duZXJJZCI6IjIyODc1MzNmLTA4ZGUtNDM3YS1iMzNiLWMzZWMzOTk2Y2NhZCIsInNpdGVNZW1iZXJJZCI6IjIyODc1MzNmLTA4ZGUtNDM3YS1iMzNiLWMzZWMzOTk2Y2NhZCIsImV4cGlyYXRpb25EYXRlIjoiMjAyNC0wNi0xNVQxMToyNjo0Mi43MjBaIiwibG9naW5BY2NvdW50SWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJhb3IiOnRydWV9",
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "appDefinitionId": "22bef345-3c5b-4c18-b782-74d4085112ff",
                    "applicationId": -666
                },
                "18": {
                    "type": "ignored",
                    "applicationId": 18
                },
                "16": {
                    "type": "editor",
                    "applicationId": 16,
                    "appDefinitionId": "139ef4fa-c108-8f9a-c7be-d5f492a2c939",
                    "dashboardUrl": "https:\/\/www.wix.com\/",
                    "dashboardDefaultHeight": 200,
                    "settingsWidth": 0,
                    "settingsHeight": 0,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 0,
                        "width": 0,
                        "abTest": false,
                        "version": 1
                    },
                    "vendorProducts": [],
                    "preInstalled": true,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": null,
                    "components": [{
                        "componentId": "0f12405e-dfa2-4968-98df-f850ba397c98",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "0f12405e-dfa2-4968-98df-f850ba397c98"
                    }, {
                        "componentId": "12c5b19f-6496-4a36-b0d9-bb88be0eb775",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Agregate List"
                    }, {
                        "componentId": "1c73e00a-f2b9-4e03-9665-5e73ce3d650e",
                        "type": "COMPONENTS_TRANSLATIONS_ADDITIONAL_FIELDS_PROVIDER",
                        "data": {},
                        "name": "Automations Translation Provider"
                    }, {
                        "componentId": "1e065761-a01e-4c79-838c-6af2151fd76e",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "1e065761-a01e-4c79-838c-6af2151fd76e"
                    }, {
                        "componentId": "266e03e8-a848-46e7-916b-54cce1a7d2fc",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "giza-automations-builder-widget"
                    }, {
                        "componentId": "2f76a930-a291-470a-8d8e-cdc00e4bbdaa",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "2f76a930-a291-470a-8d8e-cdc00e4bbdaa"
                    }, {
                        "componentId": "2f8f08fe-b611-4c9f-9320-c8584073427c",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "edit"
                        },
                        "name": "automations-builder-pages-idx"
                    }, {
                        "componentId": "5318a352-f44a-4882-b153-f9312b2c65bb",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "5318a352-f44a-4882-b153-f9312b2c65bb"
                    }, {
                        "componentId": "54b16048-ab7e-40e8-afd5-ed8981a0b7ec",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Send via webhook"
                    }, {
                        "componentId": "6217e7b8-0068-47c4-8441-f9039ea71c98",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "6217e7b8-0068-47c4-8441-f9039ea71c98"
                    }, {
                        "componentId": "65a66ef2-86be-4222-b957-ed6c05e8fc58",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "dash"
                        },
                        "name": "crm-automations-dash"
                    }, {
                        "componentId": "67028126-3a56-43dd-9ed2-0c9c875e739c",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {},
                        "name": "crm-automations"
                    }, {
                        "componentId": "6806f5b0-3a35-47d3-b78e-22343461280b",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "6806f5b0-3a35-47d3-b78e-22343461280b"
                    }, {
                        "componentId": "6e4310ac-b65c-432c-ad38-6f3690675a6f",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "6e4310ac-b65c-432c-ad38-6f3690675a6f"
                    }, {
                        "componentId": "79944fc5-4771-43f5-a333-221a88fd5a3f",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Run Velo code"
                    }, {
                        "componentId": "7b39159b-a0ad-484a-a6dc-90511f4629cd",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "7b39159b-a0ad-484a-a6dc-90511f4629cd"
                    }, {
                        "componentId": "9201b163-d1b8-4bf6-a1c1-aab727e38380",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Update Google Sheets"
                    }, {
                        "componentId": "948d5236-865e-477f-bc16-b2e7f983ad1b",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Send Email Action"
                    }, {
                        "componentId": "95c6329d-73e1-4972-a7e2-0189a9175ca9",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Get Member Action"
                    }, {
                        "componentId": "973cdd40-6378-4339-8bb7-e7c76e750878",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "973cdd40-6378-4339-8bb7-e7c76e750878"
                    }, {
                        "componentId": "9db8b3df-b04f-40ed-8a60-a7f0e27f9060",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Connect to Zapier"
                    }, {
                        "componentId": "a69c748b-11f8-40d9-8c12-a1e3d6f52164",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "a69c748b-11f8-40d9-8c12-a1e3d6f52164"
                    }, {
                        "componentId": "aadb1cae-e05a-42fb-859a-1340d94a2d86",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "aadb1cae-e05a-42fb-859a-1340d94a2d86"
                    }, {
                        "componentId": "ab9d6f90-a38b-492f-97fe-2473a0ae33c5",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "ab9d6f90-a38b-492f-97fe-2473a0ae33c5"
                    }, {
                        "componentId": "b34739f2-9de0-463f-aa48-990a3e0c54b0",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "b34739f2-9de0-463f-aa48-990a3e0c54b0"
                    }, {
                        "componentId": "b38bb2b3-582e-4a05-993c-a9c9e3259395",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "rules"
                        },
                        "name": "crm-automations-wizard"
                    }, {
                        "componentId": "bd1f5a74-9bca-4c27-9490-ac505c18dbcb",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "bd1f5a74-9bca-4c27-9490-ac505c18dbcb"
                    }, {
                        "componentId": "bfc66db8-44d1-44ea-aac6-ae4ca21bac68",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "bfc66db8-44d1-44ea-aac6-ae4ca21bac68"
                    }, {
                        "componentId": "c44319c0-701a-4e90-8244-460ac3505263",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "create"
                        },
                        "name": "automations-builder.pages.create.index"
                    }, {
                        "componentId": "c8c0eb6d-0179-4b8c-8a50-5e15bcd4124c",
                        "type": "DASHBOARD",
                        "data": {
                            "url": "http:\/\/www.wix.com\/",
                            "embedded": true,
                            "published": true
                        }
                    }, {
                        "componentId": "ca2f81b7-f89f-49d0-8da3-7a1af64b99e4",
                        "type": "AUTOMATIONS_ACTION_PROVIDER",
                        "data": {},
                        "name": "Zapier V2"
                    }, {
                        "componentId": "d9bcfdba-3a53-45cf-9495-19c8f96b7506",
                        "type": "BACK_OFFICE_EXTENSION_CONTAINER",
                        "data": {},
                        "name": "TPA Action Widget Host"
                    }, {
                        "componentId": "e6576ec0-802c-4816-a84e-a206a10e7b3d",
                        "type": "BACK_OFFICE_PAGE",
                        "data": {
                            "routePath": "customer-notifications"
                        },
                        "name": "automations-customer-notifications"
                    }, {
                        "componentId": "e673fff4-2e7c-4f98-b4bf-e69da9bbc3b7",
                        "type": "BACK_OFFICE_WIDGET",
                        "data": {},
                        "name": "e673fff4-2e7c-4f98-b4bf-e69da9bbc3b7"
                    }],
                    "appDefinitionName": "Wix Automations",
                    "instance": "IR1tit1ajV0CnNxU3sB1MlHuu1MKbJ5DcmA80Tx7qzg.eyJpbnN0YW5jZUlkIjoiODIwNzcwZTktMDNmMy00MTUxLWJlZTktM2Q0ZTE5M2VhMDQyIiwiYXBwRGVmSWQiOiIxMzllZjRmYS1jMTA4LThmOWEtYzdiZS1kNWY0OTJhMmM5MzkiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJvcmlnaW5JbnN0YW5jZUlkIjoiNjEwMWFlZWEtZDgwNi00NTdmLWI2NGMtNjE3YWNiYTUzYzMzIiwiYmlUb2tlbiI6IjUwMzU1MTI0LTUzY2EtMGQ2MS0zMGVhLTliMjQxYzFkNDg1NyIsInNpdGVPd25lcklkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwic2l0ZU1lbWJlcklkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwiZXhwaXJhdGlvbkRhdGUiOiIyMDI0LTA2LTE1VDExOjI2OjQyLjcyMFoiLCJsb2dpbkFjY291bnRJZCI6IjIyODc1MzNmLTA4ZGUtNDM3YS1iMzNiLWMzZWMzOTk2Y2NhZCIsInBhaSI6bnVsbCwibHBhaSI6bnVsbCwiYW9yIjp0cnVlfQ",
                    "instanceId": "820770e9-03f3-4151-bee9-3d4e193ea042",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                },
                "36": {
                    "type": "ignored",
                    "applicationId": 36
                },
                "19": {
                    "type": "editor",
                    "applicationId": 19,
                    "appDefinitionId": "35aec784-bbec-4e6e-abcb-d3d724af52cf",
                    "settingsWidth": 600,
                    "settingsHeight": 750,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 750,
                        "width": 600,
                        "abTest": false,
                        "version": 2
                    },
                    "vendorProducts": [],
                    "preInstalled": false,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": {
                        "permissionsEnforced": true,
                        "isStandalone": true,
                        "semanticVersion": "^0.5.0"
                    },
                    "components": [{
                        "componentId": "342a2516-b9f1-4652-9a0a-bd978771084a",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Recurring payment canceled"
                    }, {
                        "componentId": "5d9c23fa-c84c-49a7-88d1-06ae5e85c749",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Recurring invoice is canceled"
                    }, {
                        "componentId": "06ddd0ef-47c2-4376-b9b0-44ca7e6fd6e3",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Recurring invoice is paid"
                    }, {
                        "componentId": "ed15b643-6b3c-4b85-8ad8-6e0f221eab88",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Recurring payment starts"
                    }],
                    "appDefinitionName": "Recurring Invoices",
                    "instance": "hfQRwNht7FGK1pLL5kDECLJkEapPH8wc-flGgix7Y8I.eyJpbnN0YW5jZUlkIjoiZDZhYWVhYzItZWI0YS00ZWFkLThjNGQtZDZjNjQzZjYzM2NmIiwiYXBwRGVmSWQiOiIzNWFlYzc4NC1iYmVjLTRlNmUtYWJjYi1kM2Q3MjRhZjUyY2YiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJiaVRva2VuIjoiMDQ5OGNiMGYtYmI3My0wMjlkLTAyNGUtNzBhYzQ2ZDVkYmRhIiwic2l0ZU93bmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJzaXRlTWVtYmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJleHBpcmF0aW9uRGF0ZSI6IjIwMjQtMDYtMTVUMTE6MjY6NDIuNzIwWiIsImxvZ2luQWNjb3VudElkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwicGFpIjpudWxsLCJscGFpIjpudWxsLCJhb3IiOnRydWV9",
                    "instanceId": "d6aaeac2-eb4a-4ead-8c4d-d6c643f633cf",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                },
                "15": {
                    "type": "editor",
                    "applicationId": 15,
                    "appDefinitionId": "55cd9036-36bb-480b-8ddc-afda3cb2eb8d",
                    "settingsUrl": "https:\/\/www.wix.com\/",
                    "dashboardUrl": "https:\/\/www.wix.com\/price-quotes",
                    "dashboardDefaultHeight": 200,
                    "settingsWidth": 600,
                    "settingsHeight": 750,
                    "demoMode": false,
                    "sectionSettings": {
                        "height": 750,
                        "width": 600,
                        "url": "https:\/\/www.wix.com\/",
                        "urlV2": "https:\/\/www.wix.com\/",
                        "abTest": false,
                        "version": 2
                    },
                    "vendorProducts": [],
                    "preInstalled": false,
                    "appType": "Dashboard",
                    "provisionOnSaveSite": false,
                    "appFields": {
                        "permissionsEnforced": false,
                        "blocksPermissionsEnforced": false,
                        "isStandalone": true,
                        "semanticVersion": "^0.15.0"
                    },
                    "components": [{
                        "componentId": "fb08747e-bf9a-412f-984e-a750bfcc0a17",
                        "type": "DASHBOARD",
                        "data": {
                            "url": "https:\/\/www.wix.com\/price-quotes",
                            "embedded": true
                        }
                    }, {
                        "componentId": "70cfe9bf-7a4f-42e6-ae09-292c9c005c92",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Price quote sent "
                    }, {
                        "componentId": "6f1da71c-af9e-461d-84b5-0b5a613795eb",
                        "type": "BACK_OFFICE_EXTENSION",
                        "data": {}
                    }, {
                        "componentId": "0a888a42-a7d5-42eb-8624-2409d834f2da",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Price quote is accepted"
                    }, {
                        "componentId": "e64ebb79-ec82-4113-997e-2844d130609c",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Price quote expired"
                    }, {
                        "componentId": "75770d3f-61f1-4ca8-91d1-1b07caf8eba7",
                        "type": "AUTOMATIONS_TRIGGER_PROVIDER",
                        "data": {},
                        "name": "Price quote accepted"
                    }, {
                        "componentId": "e4f39eca-2054-4215-bc47-6a352f05a45c",
                        "type": "NOTIFICATION_TOPIC",
                        "data": {},
                        "name": "Price quote is expired"
                    }, {
                        "componentId": "127437a3-0369-4e57-a3cd-af6bd4bc8ae9",
                        "type": "BACK_OFFICE_EXTENSION_MENU_ITEM",
                        "data": {}
                    }, {
                        "componentId": "9e00c9a1-71cb-4ee7-ae33-98b73f41fe7f",
                        "type": "BACK_OFFICE_EXTENSION_MENU_ITEM",
                        "data": {}
                    }],
                    "appDefinitionName": "Price Quotes",
                    "instance": "xRIPSf9Rk77xS42BryscE8dT9LMKvcBQsFjfdX6-aDU.eyJpbnN0YW5jZUlkIjoiNTNhODIzNjgtNGJhZS00MzQ1LWFlOTYtZjJlNzFjMWQzNzEzIiwiYXBwRGVmSWQiOiI1NWNkOTAzNi0zNmJiLTQ4MGItOGRkYy1hZmRhM2NiMmViOGQiLCJtZXRhU2l0ZUlkIjoiZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1Iiwic2lnbkRhdGUiOiIyMDI0LTA2LTE1VDA3OjI2OjQyLjcyMFoiLCJ1aWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJwZXJtaXNzaW9ucyI6Ik9XTkVSIiwiZGVtb01vZGUiOmZhbHNlLCJiaVRva2VuIjoiODE5YTAyYTUtMWI5Ny0wZjc1LTIwOTUtNTQ4ZDE5M2VkZjA2Iiwic2l0ZU93bmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJzaXRlTWVtYmVySWQiOiIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWQiLCJleHBpcmF0aW9uRGF0ZSI6IjIwMjQtMDYtMTVUMTE6MjY6NDIuNzIwWiIsImxvZ2luQWNjb3VudElkIjoiMjI4NzUzM2YtMDhkZS00MzdhLWIzM2ItYzNlYzM5OTZjY2FkIiwicGFpIjpudWxsLCJscGFpIjpudWxsLCJhb3IiOnRydWV9",
                    "instanceId": "53a82368-4bae-4345-ae96-f2e71c1d3713",
                    "widgets": {},
                    "appRequirements": {
                        "requireSiteMembers": false
                    },
                    "sectionPublished": true,
                    "sectionMobilePublished": false,
                    "sectionSeoEnabled": true,
                    "isWixTPA": true,
                    "installedAtDashboard": true,
                    "permissions": {
                        "revoked": false
                    },
                    "expirationDate": "2024-06-15T11:26:42.720Z",
                    "openPremiumPage": false
                }
            },
            "premiumFeatures": [],
            "geo": "THA",
            "languageCode": "th",
            "locale": "th-TH",
            "previewMode": true,
            "userId": "2287533f-08de-437a-b33b-c3ec3996ccad",
            "siteMetaData": {
                "preloader": {
                    "uri": "",
                    "enabled": false
                },
                "adaptiveMobileOn": true,
                "quickActions": {
                    "socialLinks": [],
                    "colorScheme": "dark",
                    "configuration": {
                        "quickActionsMenuEnabled": false,
                        "navigationMenuEnabled": true,
                        "phoneEnabled": false,
                        "emailEnabled": false,
                        "addressEnabled": false,
                        "socialLinksEnabled": false
                    }
                },
                "contactInfo": {
                    "companyName": "",
                    "phone": "",
                    "fax": "",
                    "email": "",
                    "address": ""
                },
                "renderHints": {
                    "componentsCount": {
                        "wysiwyg.viewer.components.ExpandableMenu": 1,
                        "wysiwyg.viewer.components.QuickActionBar": 1,
                        "wysiwyg.viewer.components.HeaderContainer": 1,
                        "wysiwyg.viewer.components.Column": 6,
                        "wysiwyg.viewer.components.menus.DropDownMenu": 1,
                        "wysiwyg.viewer.components.LinkBar": 1,
                        "wysiwyg.viewer.components.StripColumnsContainer": 3,
                        "wysiwyg.viewer.components.ClassicSection": 2,
                        "mobile.core.components.Page": 2,
                        "wysiwyg.viewer.components.MenuToggle": 1,
                        "wysiwyg.viewer.components.PagesContainer": 1,
                        "mobile.core.components.MasterPage": 1,
                        "wysiwyg.viewer.components.WPhoto": 1,
                        "wysiwyg.viewer.components.WRichText": 10,
                        "wysiwyg.viewer.components.SiteButton": 4,
                        "wysiwyg.viewer.components.MenuContainer": 1,
                        "wysiwyg.viewer.components.PageGroup": 1,
                        "wysiwyg.viewer.components.FooterContainer": 1
                    },
                    "version": 2,
                    "isClassicSectionsSite": true
                }
            },
            "runningExperiments": {
                "specs.thunderbolt.getMemberDetailsFromMembersNg": "true",
                "dm_onlyRerunWhenFixerRequiresReruns": "false",
                "specs.thunderbolt.fixTextInputRaceCondition": "false",
                "specs.thunderbolt.blocksUpdateConfigBlacklistCleanup": "true",
                "dm_fixBrokenStylableMenuSubSubStyles": "true",
                "ds_fixStylableDisabledAttribute": "new",
                "dm_performAutoSaveOnInitMethod": "true",
                "specs.thunderbolt.supportSpxInEEMappers": "true",
                "dm_refreshBlocksWidgetWhenReparentingPages": "true",
                "ds_newSchemas": "returnNew",
                "dm_stopMasterpageFixerLoop": "true",
                "se_stickyFremiumHeaderMobilePreview": "new",
                "bv_pinToContainer": "new",
                "specs.thunderbolt.specificTransitionsProperties": "true",
                "dm_jitFriendlyDalForClient": "true",
                "dm_optimizeNicknamesGenerationOnSave": "true",
                "bv_shouldRelayoutStylableComps": "new",
                "dm_blocksLivePreview": "true",
                "specs.thunderbolt.exposeSendSetPasswordInVelo": "new",
                "specs.thunderbolt.root_components_carmi": "true",
                "specs.thunderbolt.ghostify_hidden_comps": "true",
                "sv_ampLinkTag": "new",
                "dm_aiContentReplaceNewlineWithBreakline": "true",
                "specs.thunderbolt.fixPinnedSectionZIndex": "true",
                "specs.logo-builder.client.ImmutableDomain": "false",
                "dm_appUpdatedLivePreviewHook": "true",
                "sv_twitterMetaTags": "new",
                "dm_fixBrokenScopedLayout": "true",
                "sv_addPropsToHostInNativeComponent": "new",
                "WixStoresLaunch": "new",
                "specs.thunderbolt.changeHashBangUrlFix": "true",
                "specs.thunderbolt.CollapsibleTextNewPreviewStateImplementation": "true",
                "specs.thunderbolt.stMixinParentAsPropsParent": "true",
                "specs.thunderbolt.app_reflow_with_lightboxes": "true",
                "sv_livePreview": "new",
                "dm_jitFriendlyDal": "true",
                "dm_ideServerNG": "new",
                "dm_useUserCodeDependencyManagerV2": "true",
                "bv_ghostableUrl": "new",
                "specs.thunderbolt.positionAbsoluteFiniteHeightGalleries": "true",
                "dm_biDummyExperiment": "false",
                "specs.thunderbolt.mlUtilsImport": "true",
                "dm_sapiSkipMigrators": "true",
                "dm_allowAddingStripForNonRenderingState": "true",
                "specs.thunderbolt.puoRepeaterIds": "true",
                "dm_aiStructureInjectionUsePromptHub": "true",
                "specs.thunderbolt.facebookVideoPlayerDimensions": "true",
                "specs.ShouldUseNewErrorSchemaOnSiteMembersControllerFT": "false",
                "dm_dontRunClientRenderHints": "false",
                "specs.thunderbolt.fixVectorImageShouldScaleStroke": "true",
                "dm_wixCodeNewProvision": "true",
                "dm_deprecateWixUiSanta": "true",
                "dm_updateRepeaterByPageStructure": "false",
                "dm_screenInBehaviorsToEntranceEffectsFixer": "true",
                "bv_wixImage": "new",
                "bv_cleanStructure": "new",
                "specs.thunderbolt.mesh_css_catharsis": "true",
                "sv_blogSocialCounters": "new",
                "dm_inCsaveAfterEmptyTzHandleTheRestOfTheChunks": "true",
                "dm_allowShorteningPastChildrenOutsideContainer": "true",
                "specs.thunderbolt.DDMenuMigrateCssCarmiMapper": "true",
                "dm_fetchDevCenterWidgetIds": "true",
                "specs.thunderbolt.stylableOverridesReact": "true",
                "dm_platformAddSubscribeOnEventFunctionality": "true",
                "dm_disableBlocksWidgetLivePreviewOnHooks": "true",
                "dm_sapiCSMRefetchIfML": "true",
                "dm_fixSystemStyleAsRefArray": "true",
                "dm_reportOnBrokenRefAddedErrorWithCSaveTag": "true",
                "specs.thunderbolt.veloWixMembersAmbassadorV2": "new",
                "dm_duplexerReconnectOnDeferredTimeout": "true",
                "dm_mobileAlgoValidationNoConduct": "false",
                "specs.thunderbolt.UseWixDataGetRequests": "true",
                "se_newUpdateAndPushApi": "true",
                "bv_livePreview_x": "new",
                "dm_getWidgetViewStateAfterRefresh": "true",
                "specs.thunderbolt.UseWixDataItemService": "true",
                "ds_csave": "new",
                "dm_removeNonRefNodeOnUpdate": "true",
                "dm_encodeFixerVersioning": "true",
                "specs.support.LessCapabilitiesForSupportUser": "old",
                "dm_aiPageInjectionUsePromptHub": "true",
                "specs.thunderbolt.fiveGridLineStudioSkins": "true",
                "specs.thunderbolt.TPA3DGalleryEEUrl": "true",
                "specs.thunderbolt.fixStylableDisabledAttribute": "new",
                "Wixer.MvtForQA.ABCD": "C",
                "dm_alwaysInflateRemoteCompsOnUpdate": "false",
                "sv_tpaAddChatApp": "new",
                "specs.thunderbolt.carouselGalleryImageFitting": "true",
                "dm_allowResizeRefComponents": "new",
                "dm_sitegeneration19": "true",
                "dm_fixAfterApplySnapshotLivePreviewHook": "true",
                "specs.thunderbolt.displayRefComponentsAsBlock": "true",
                "specs.thunderbolt.customElementUpdateHeight": "false",
                "specs.thunderbolt.InitPlatformApiProvider": "true",
                "dm_useSingleStructureVariants": "true",
                "specs.thunderbolt.appLoadInPanorama": "true",
                "displayWixAdsNewVersion": "new",
                "specs.thunderbolt.BundlerTypescriptListExportedFunctions": "true",
                "sv_bookingsFES": "new",
                "dm_ignoreStrictModeWarnings": "true",
                "specs.thunderbolt.veloWixMembers": "new",
                "specs.thunderbolt.freemiumBannerMobileUsePreferredApp": "false",
                "specs.ShouldForceCaptchaVerificationOnSignupSpec": "Disabled",
                "specs.ShouldForceCaptchaVerificationOnLoginSpec": "Disabled",
                "dm_triggerLivePreviewOnlyForCurrentPage": "true",
                "dm_runDalStrictSchemaValidation": "false",
                "dm_beforeRemoveAppWhenDeletingWidget": "true",
                "specs.thunderbolt.support_controllersToRefresh_livePreview_flag": "true",
                "dm_disableMobileHintsValidationInADI": "new",
                "specs.thunderbolt.catharsis_fontFaces": "true",
                "specs.thunderbolt.getMainGridAppId": "true",
                "specs.thunderbolt.accordionHeightAuto": "true",
                "specs_DummySpec": "true",
                "dm_newBuildService": "new",
                "specs.thunderbolt.fixResponsiveBoxContainerLayoutClass": "true",
                "specs.thunderbolt.minisitesShadowDom": "true",
                "dm_persistAppsInstallState": "true",
                "dm_optimizeAppStudioModel": "true",
                "dm_fixGetAllGhostForWidgetInRepeater": "true",
                "dm_removeMobileVariantFromPage": "true",
                "specs.thunderbolt.WixCodeAnalyzeImportedNamespaces": "true",
                "dm_fixerVersioningDataCollection": "false",
                "specs.thunderbolt.FixRepeatersCustomCSS": "false",
                "dm_sendPresetInfoInBlocksBuild": "true",
                "dm_publishPipeline": "true",
                "dm_fixMissingStyleTypeInSystemStyle": "true",
                "dm_avoidDalRejectOnVersionInfo": "true",
                "dm_measureCSaveDeferredTimeoutAndReportToEditor": "false",
                "dm_allowAddingStripForNonFullWidthPopup": "true",
                "specs.thunderbolt.fetchCurrentMemberFromMembersNg": "true",
                "dm_newBlocksPreBuildService": "true",
                "specs.thunderbolt.fetch_widget_iteratively": "true",
                "se_stylablePanelVerticalMode": "A",
                "dm_enableControllerForBlocksContainers": "true"
            },
            "urlFormatModel": {
                "format": "slash",
                "forbiddenPageUriSEOs": ["app", "apps", "_api", "robots.txt", "sitemap.xml", "feed.xml", "sites"],
                "pageIdToResolvedUriSEO": {}
            },
            "passwordProtectedPages": [],
            "useSandboxInHTMLComp": true,
            "routers": {
                "configMap": {}
            },
            "mediaAuthToken": "eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhcHA6OTM0MDY2ODAzMjg5ODYzOCIsInN1YiI6InNpdGU6ZDIzMjIxY2QtNTAzOS00YzMwLThlMDMtYTY2YTA1MjNlODE1IiwiYXVkIjoidXJuOnNlcnZpY2U6ZmlsZS51cGxvYWQiLCJleHAiOjE3MTg1MjI4MDIsImlhdCI6MTcxODQzNjQwMiwianRpIjoiRjN3Vi1LNE9LRWI0Wmd0Vy04cHlkZyIsImFkZGVkQnkiOiJ1c2VyOjIyODc1MzNmLTA4ZGUtNDM3YS1iMzNiLWMzZWMzOTk2Y2NhZCJ9.HqP4PfCyp14A9uvf4aWvtMza753qzuzhi6DJ8SPuBS4",
            "pagesPlatformApplications": {},
            "sitePropertiesInfo": {
                "siteDisplayName": "My Site 1",
                "locale": "th-th",
                "currency": "THB",
                "timeZone": "Asia\/Bangkok",
                "language": "th"
            },
            "seo": false,
            "pageListTopology": [{
                "baseUrl": "https:\/\/pages.parastorage.com\/",
                "parts": "sites\/{filename}.z?v=3"
            }, {
                "baseUrl": "https:\/\/staticorigin.wixstatic.com\/",
                "parts": "sites\/{filename}.z?v=3"
            }, {
                "baseUrl": "https:\/\/fallback.wix.com\/",
                "parts": "wix-html-editor-pages-webapp\/pageForEditor\/{filename}"
            }],
            "pageList": {
                "pages": [{
                    "pageId": "c1dmp",
                    "title": "หน้าหลัก",
                    "pageUriSEO": "home",
                    "pageJsonFileName": "228753_63382faf359b9e945f9f1edcad2f6db4_1.json"
                }, {
                    "pageId": "rlpfz",
                    "title": "นโยบายความเป็นส่วนตัว",
                    "pageUriSEO": "privacy-policy",
                    "pageJsonFileName": "228753_08659addd90f3303e4dc7db36558ca91_1.json"
                }],
                "mainPageId": "c1dmp",
                "masterPageJsonFileName": "228753_8be9cb1468d4af24f3107cf909a2b23c_1.json",
                "topology": [{
                    "baseUrl": "https:\/\/pages.parastorage.com\/",
                    "parts": "sites\/{filename}.z?v=3"
                }, {
                    "baseUrl": "https:\/\/staticorigin.wixstatic.com\/",
                    "parts": "sites\/{filename}.z?v=3"
                }, {
                    "baseUrl": "https:\/\/fallback.wix.com\/",
                    "parts": "wix-html-editor-pages-webapp\/pageForEditor\/{filename}"
                }],
                "fixedPagePath": {
                    "baseUrl": "siteassets.parastorage.com\/pages",
                    "parts": "\/fixedData?ck={ck}&experiments={experiments}&isHttps={isHttps}&isUrlMigrated={isUrlMigrated}&metaSiteId={metaSiteId}&pageId={pageId}&quickActionsMenuEnabled={quickActionsMenuEnabled}&siteId=58a5bb32-b56b-42ae-9bb5-9e1d04949ced&v=3&version={version}"
                }
            },
            "platformControllersOnPage": {},
            "siteOwnerCoBranding": {
                "accountOwnerId": "2287533f-08de-437a-b33b-c3ec3996ccad"
            },
            "dacVersionOverrides": {},
            "renderingMode": "PREVIEW",
            "platformAppsExperiments": {},
            "seoExperiments": {},
            "dataFixerExperiments": {},
            "blocksExperiments": {},
            "testModuleVersion": "",
            "thunderboltEventsSamplingRatio": 0.0,
            "isPartialRouteMatching": false
        };
        var commonConfig = {
            "brand": "wix",
            "host": "VIEWER"
        };
        var documentServicesHeadless = false;
        var documentServicesReadOnly = false;
        var documentServicesModel = {
            "originalTemplateId": "639a69e2-6716-4f0f-935e-d0d2a1935659",
            "version": 1643622550556,
            "revision": 1,
            "metaSiteData": {
                "externalUriMappings": [],
                "favicon": "",
                "indexable": true,
                "metaTags": [{
                    "name": "description",
                    "value": "",
                    "isProperty": false
                }, {
                    "name": "fb_admins_meta_tag",
                    "value": "",
                    "isProperty": false
                }, {
                    "name": "keywords",
                    "value": "",
                    "isProperty": false
                }],
                "suppressTrackingCookies": false,
                "thumbnail": "",
                "title": ""
            },
            "editorSessionId": "34ae55ed-7d0c-4bfc-9e5b-ea57f3209818",
            "neverSaved": false,
            "publicUrl": "https://kittinunrsn.wixsite.com/my-site-1",
            "usedMetaSiteNames": [],
            "userInfo": {
                "name": "",
                "email": "kittinun.rsn@gmail.com",
                "isStudio": false,
                "userId": "2287533f-08de-437a-b33b-c3ec3996ccad",
                "accountId": "2287533f-08de-437a-b33b-c3ec3996ccad"
            },
            "siteName": "my-site-1",
            "customHeadTags": "",
            "isPublished": false,
            "pendingApps": [],
            "permissionsInfo": {
                "isOwner": true,
                "permissions": ["AUTOCMS.TASK_COPY_FIELD_DATA", "QUESTIONS.CREATE", "BENEFIT_PROGRAMS.ITEM_CREATE", "WIX-FORUM.CATEGORY-CREATE", "premium.RefundBackofficeApi.getPendingRejectedRefundRequests", "WIX_QUOTES.LIMITED_VIEW", "SECURITY.SITE_EXPOSURE_GET", "DOMAINS.MANAGE_DOMAIN_ASSIGNMENTS", "paid-plans.manage-paid-plans-benefits", "WIX_FORUM.POST_REMOVE_BEST_ANSWER_COMMENT", "SIDEBAR.VIEW-PAYMENTS", "premium.WixPackagePickerSubmitController.packagePickerSubmitValidation", "WIX_DATA.DATA_JOB_SUBMIT", "MEDIA.ENTERPRISE_MEDIA_ITEMS_UPDATE", "WIXSTUDIO.TEMPLATE_READ", "BOOKINGS.MANAGE_EXTERNAL_CALENDAR", "WIX_EVENTS.STAFF_MEMBER_READ", "premium.DomainStatusRpc.isServedByWix", "ECOM.ABANDONED_CHECKOUT_UPDATE", "WIX_DATA.DELETE_COLLECTION", "EDITORX.ACCOUNT_MANAGE_LIBRARIES", "SIDEBAR.ENABLE_SMS", "WIX_RESTAURANTS.READ_SETTINGS", "ENTITLEMENTS.ACCOUNT_CLOSE", "RESTAURANTS.MENU_ORDERING_SETTINGS_CREATE", "SITEMORPHOSIS.OPT_STATUS", "SITE_SETTINGS.VIEW", "ONE_APP.TASK_LIST", "PROPOSALS.PROPOSAL_MARK_VIEWED", "RECURRING_INVOICES.MANAGE", "PROPOSALS.CONSENTS_READ", "CONTACTS_LABELS.VIEW", "TABLE_RESERVATIONS.GET_TIMESLOTS_REQUIRING_APPROVAL", "DOMAINS.READ_TLDS", "BOOKINGS.CANCEL_BOOKING", "POS.ORDERS-MANAGE-PAST-DAYS", "VELO.TEAMWORK_ONBOARDING_STATUS_READ", "SIDEBAR.VIEW_PORTFOLIO", "PRESETS_GALLERY_MANAGER.CREATE_GALLERY", "WIX_STORES.WISH_API_READ", "PROMOTE.FACEBOOK_ADS_ACCOUNT_CREATE", "SIDEBAR.ENABLE_WEBSITE_PAGE", "premium.DigitalGoodsMediaDelivery.updateOnFailedMediaDelivery", "WIX_MULTILINGUAL.TRANSLATE_APPS", "WIX_STORES.CUSTOMIZATION_UPDATE", "WIX_EVENTS.READ_RSVP_DETAILS", "premium.PlansStoreApi.getActivePackageByExternalId", "my-account.view-video-site-traffic", "premium.SubscriptionsManager.turnAutoRenewOff", "DINERS.REMOVE_RESTAURANT", "SCIM.SCHEMA_READ", "EMAIL_MARKETING.UPDATE_CAMPAIGN_TITLE", "WIX_STORES.PRODUCT_READ_MERCHANT_DATA", "MARKETING.CONSENT_CREATE", "SIDEBAR.ENABLE-ART-STORE", "WIX_VIDEO.READ_ONLY", "FACEBOOK_ADS.ACCOUNT_DELETE", "SIDEBAR.ENABLE-FORMS", "PRESENCE.META_SITE_BO", "BOOKINGS.BOOKING_RESCHEDULE", "WIX_STORES.MARKETPLACE_PRODUCT_OVERRIDES_UPDATE", "IAM.OIDC_CONFIG_DELETE", "premium.PlansPackagePickerControllers.loadPlansPackagePickerAccountLevel", "WIX_STORES.BRAND_READ", "OPEN_AI_CLIENT.COMPLETION_ACCOUNT_LEVEL", "WIXSTUDIO.SITE_CLIENT_CREATE", "premium.PremiumPlanProductManager.getPremiumPlanProducts", "SIDEBAR.VIEW-PAID-ADS", "ANALYTICS_AND_REPORTS.EDIT_FIELDS", "paid-plans.view-benefits-transactions", "HYPE.ACCESS_BACK_OFFICE", "CHALLENGE_MANAGE.NOTIFICATION_SETTING_CONFIGURATION", "PARTNERS.PARTNER_QUALITY_DELETE", "POS.PAYMENTS_READ", "VIRTUAL_NUMBERS.BLOCKED_NUMBERS_VIEW", "BOOKINGS.SERVICE_OPTIONS_AND_VARIANTS_UPDATE", "WIX_FORMS.GET_RESTRICTIONS", "PROPOSALS.PROPOSAL_READ_DOMAIN_EVENTS", "TABLE_RESERVATIONS.RESERVATION_LOCATION_DELETE_ORPHAN", "WIX-FORUM.POST-REMOVE-BEST-ANSWER-COMMENT", "WIX_DATA.RESTORE_SCHEMAS_SNAPSHOT", "LOYALTY.MANAGE_AUTOMATIONS", "SIDEBAR.VIEW-SUBSCRIPTIONS", "MEDIA.SITE_MEDIA_STORAGE_READ", "premium.PlansPurchasePageControllers.renderUpgradeCyclePurchasePage", "html-editor.edit-revisions", "GOOGLE_MAILBOX_MANAGEMENT_API.VALIDATE_DOMAINS_RESTRICTIONS", "CHALLENGE-MANAGE.CREATE-INVITE-LINK", "IAM.ENABLED_CONNECTIONS_CREATE", "WIX_COMMENTS.COMMENT_UPDATE", "WIX_DATA.SHARED_DATA_COLLECTION_UPDATE_POLICY", "STUDIO.VIEW_CUSTOM_BRANDING_SETUP", "SIDEBAR.VIEW-PARTNERS-NEWS", "", "ENTITLEMENTS.ENTITLEMENT_GRANT", "MEMBERS.CUSTOM_FIELDS_READ", "MEMBERS.MEMBER_DISCONNECT", "DOCUMENT.UPDATE_PAGES", "ACCOUNT.CREATE_ACCOUNT_TENANT", "premium.GoogleMailboxesEmailSender.getNearRenewalEmail", "BENEFIT_PROGRAMS.PROGRAM_DEFINITION_READ", "team.delete-member", "premium.PlansBillingAndPaymentsApi.getTpaPackageBySbsServiceId", "VELO.USER_CODE_ADD_NPM_DEPENDENCY", "SIDEBAR.ENABLE-BOOKINGS-INTEGRATION-CHANNELS", "SIDEBAR.VIEW-OLD-ECOM", "PROMOTE.SUGGESTIONS_READ", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_CONFIRM", "premium.PlansBillingAndPaymentsApi.getTpaSkusIncludeMigrationSkus", "SIDEBAR.VIEW_TABLE_RESERVATIONS", "WIX_HOTELS.VIEW_EXTRA", "BUSINESS_NAME_GENERATOR.NAMES_LIST", "BOOKINGS.STAFF_MEMBER_UPDATE", "SEATING_PLANS.READ_SEATING_PLANS", "SITE_BRANCHES.RESTORE_BRANCH", "ECOM.READ_TRANSACTIONS", "PRICING_PLANS.SET_SUBMISSION", "MEMBERS.REPORTS_READ", "BOOKINGS.LOCK_READ", "my-account.invite-admin", "PAYMENTS.DISPUTES_ACCEPT", "POS.ORDERS-MANAGE-TODAY", "search-everything.search", "PRICING_PLANS.READ_PLANS", "AUTOMATIONS.AUTOMATION_UPDATE", "SIDEBAR.ENABLE-ADMIN-PAGES", "premium.StoreMailboxOldApi.getMailboxSaleTypeForDomainAndUser", "POS.SETTINGS-CUSTOMIZE-CHECKOUT", "premium.PlansStoreApi.willOnlinePaymentsFeatureBeRemove", "MEMBERS.PROFILE_URL_READ", "PREMIUM_MANAGEMENT-PAYMENT.METHODS-LIST_BILLING_MANAGERS_IN_TEAM", "WIX_DATA.SAVE", "MEMBERS.CUSTOM_FIELDS_DELETE", "REPLACE_CONTRIBUTOR_ROLES", "RESTAURANTS.MODIFIER_GROUP_UPDATE", "virtual-numbers.manage", "PRICING_PLANS.APPLY_COUPON", "SECURITY.SITE_EXPOSURE_SET", "wix-stores.checkout-create-orders", "ANALYTICS_AND_REPORTS.AVAILABILITY_READ", "WIX-GROUPS.CREATE_NEW_GROUP", "WIX_FORMS.LIST_SITE_USERS_EMAIL", "premium.purchase-plans", "WIX_RESTAURANTS.READ_LOCAL_DELIVERY", "VELO.DATABASE_DEPLOYMENT_UPDATE", "BENEFIT_PROGRAMS.ITEM_SET_ALLOCATE", "SIDEBAR.ENABLE-STORES-ABANDONED-CARTS", "ANALYTICS_AND_REPORTS.INDUSTRY_BENCHMARK_READ", "EMAIL_SUBSCRIPTIONS.VIEW", "premium.PlansTransferSiteApi.getPlanVerticalTpas", "MARKETING.CONSENT_UPDATE", "ALBUMS.COLLECTIONS_MANAGE", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_RESCHEDULE", "ECOM.DELIVERY_CARRIER_UPDATE", "VELO.SINK_DELETE", "ENTERPRISE.CUSTOM_APPS_VIEW", "PREMIUM.CHECKOUT-SERVER-API-PAY", "ENTITLEMENTS.ENTITLEMENT_RESERVATION_RELEASE", "WIX_STORES.MODIFY_ORDERS", "premium.StoreMailboxService.getMailboxSaleTypeForSite", "premium.PlansStoreApi.getProductBySbsProductGuid", "facebook-ads.manage", "BOOKINGS.RESOURCE_READ", "premium.TransferSiteController.renderTransferSiteVm", "PROMOTE-TEMPLATES-MANAGER.VIEW", "BILLING.TAX_GROUP_MAPPING_CREATE", "ACCESSIBILITY.SITE_ANALYZER_CAN_ANALYZE", "premium.SBSServiceNotificationsControllerBase.ServiceNotificationData", "BADGES.BADGE_CREATE", "WIX_STORES.PRODUCT_DELETE", "DOMAINS.MANAGE_CONFIRMATION_PROCESSES", "WIX_DATA.INSERT", "INBOX_ID_MAPPINGS.GET", "WIX_MULTILINGUAL.CONTENT_DELETE", "WIX_STORES.PRODUCT_UPDATE", "SIDEBAR.VIEW-STORES-ORDERS", "premium.PPPlansCmsManager.getAllActiveRecurringPlans", "SIDEBAR.ENABLE-BLOG-CATEGORIES", "CALENDAR.MANAGE_OWN_EXTERNAL_CALENDAR_CONNECTIONS", "site-actions.accept-transfer-site", "WIX_DATA.TAKE_BACKUP", "RESTAURANTS.MENU_QUERY", "ANALYTICS_AND_REPORTS.AI_CHATBOT_ASK", "CRM_FINANCIAL.INVOICES_MANAGE", "MEDIA.SITE_MEDIA_FILES_DOWNLOAD", "PRICING_PLANS.PURCHASE_PLANS", "BENEFIT_PROGRAMS.POOL_READ", "BOOKINGS.SITE_ROLLOUT_STATUS_READ", "members-groups.manage", "DOMAINS.CONNECT_DOMAIN", "WIX_DATA.SAVE_SCHEMA", "premium.getAllFeatures", "DOCUMENT.MODIFY_MENUS", "REVIEWS.READ_PRIVATE_REVIEWS", "BILLING_ORG.DOWNLOADER_CONFIGURATION_READ", "WIX_STORES.MARKETPLACE_PRODUCT_MAP_READ", "ANALYTICS_AND_REPORTS.SITE_CLASSIFICATION_READ", "premium.getUserVouchers", "SIDEBAR.VIEW_RESTAURANTS_GATES", "WIX_MULTILINGUAL.GET_LANGUAGES", "SIDEBAR.VIEW-STORES-PAYMENTS", "SIDEBAR.ENABLE_SITES_LIST", "CODUX.IDE_FILES_UPDATE", "CONTACTS.SEGMENT_COLLECTION_UPDATE", "ECOM.DELIVERY_REGION_UPDATE", "PREMIUM.CHECKOUT-SERVER-API-PAY-AND-UPDATE", "BRANDED_APPS.GET_BUILD", "premium.TransferSiteMyAccountApi.isPendingTransfer", "PRESENCE.VIEWER_WATCHER", "WIX_HOTELS.VIEW_BULK_UPDATE", "MEMBERS.ROLES_READ", "BOOKINGS.RESOURCE_TYPE_READ", "QUIZZES.UPDATE_QUIZ", "PROMOTE.SENDER_EMAILS_SEND_VERIFICATION_MAIL", "premium.TransferSiteToMsnApi.getMsnPackageForDomain", "WIX_FORUM.POST_MOVE", "SIDEBAR.ENABLE-INVOICE-SETTINGS", "BRANDED_APPS.READ_BUILD_STATUSES", "WIX_EVENTS.READ_ORDERS", "ANALYTICS_AND_REPORTS.CAN_SUBSCRIBE_NATIVE_TABLES", "premium.PremiumMsnServices.resetUserPassword", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.CSV", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_CREATE", "WIX_STORES.PRODUCT_MERCHANT_DATA_READ", "SECRETS_VAULT.SECRET_UPDATE", "ANALYTICS_AND_REPORTS.AVAILABILITY_CHECK", "GOOGLE_CONTENT_API.ACCOUNT_WRITE", "BLOG.GET_SLUG_SUGGESTION", "DOMAINS.MANAGE_CONNECTED_DOMAINS", "PREMIUM.PREMIUM_USER_HIGH_PRIORITY_NOTIFIER.NOTIFY_GOOGLE_WORKSPACE_MIGRATION", "ACCOUNT_ROLES.GET_ROLES", "PAYMENTS.ACCOUNTS_READ", "PREMIUM.CHECKOUT-SERVER-API-CREATE-PAYMENT-SOURCE", "PROPOSALS.PROPOSAL_SEND", "BOOKINGS.SERVICES_LOCATIONS_SET", "WIX_MULTILINGUAL.ADD_LANGUAGE", "premium.InternalConnectDomainApi.addDomain", "DEV_CENTER.RESEND_APP_INVITE", "TIPS.READ_DASHBOARD_CONFIG", "ONLINE_PROGRAMS.PARTICIPANT_RESOLVE", "SIDEBAR.VIEW_SMS", "SIDEBAR.ENABLE-FACEBOOK-CHANNEL", "API_KEYS.UPDATE", "BENEFIT_PROGRAMS.PROGRAM_PAUSE", "TEAM.VIEW_SCOPES", "BENEFIT_PROGRAMS.PROGRAM_READ", "PROMOTE.PUBLISHER_ITEM_READ", "premium.PremiumVouchersV2.getUserVouchers", "ACCOUNT_ROUTING.ROUTE_READ", "BRANDED_APPS.READ_SM_COLLECTION_TYPE", "NOTIFICATION_PREFERENCES.BULK_UPDATE_STATE_ACCROSS_SITES", "premium.DomainTransferSiteRpc.updateContactInfoWithUserIp", "RESTAURANTS.FULFILLMENT_METHOD_UPDATE", "premium.VouchersDomainsApi.getUserVouchers", "ANALYTICS_AND_REPORTS.MANAGE_SUBSCRIPTIONS", "ECOM.MANAGE_SHIPPING_RULES", "PREMIUM.RESELLER_MANAGEMENT_IS_ALLOWED", "WIX_RESTAURANTS.SERVICE_FEES_RULES_CREATE", "SIDEBAR.VIEW-INSTALLED-APPS", "ONLINE_PROGRAMS.PARTICIPANT_REMOVE", "RESTAURANTS.MENU_ORDERING_SETTINGS_UPDATE", "BOOKINGS.LOCK_CREATE", "SIDEBAR.ENABLE_FAQSITE", "PORTFOLIO.PROJECT_DELETE", "CRM_ASSIGNEES.ASSIGNEE_VIEW", "premium.FeaturesManager.GetFeaturesBulk", "premium.MsnStoreServices.getAllUserPackages", "SIDEBAR.ENABLE_BLOG_MY_PROFILE", "RESTAURANTS.AVAILABILITY_EXCEPTION_READ", "premium.ExternalInvoicesApi.getByInvoiceId", "BENEFIT_PROGRAMS.POOL_END", "POS.CUSTOMERS-EDIT", "GOOGLE_CONTENT_API.ACCOUNT_READ", "ENTERPRISE.SSO-SETTINGS", "BLOG.PREVIEW-DRAFT", "ONE_APP.CONTACT_LIST", "BENEFIT_PROGRAMS.TRANSACTION_UPDATE", "paid-plans.view-member-purchase", "WIX_STORES.RIBBON_UPDATE", "premium.PaymentsHistoryApi.retriggerMissingInvoices", "SIDEBAR.ENABLE-LOGO-MAKER", "RESTAURANTS.DISPLAY_SETTINGS_UPDATE", "CHALLENGE-MANAGE.DELETE-CHALLENGE", "premium.PremiumDomainManager.deleteDomain", "PARTNERS.MARKETPLACE_BRIEFS_CREATE", "WIX_FORUM.DRAFT_POST_PUBLISH", "BLOG.CHANGE-POST-OWNER", "PROPOSALS.PROPOSAL_PUBLISH", "promote-shareit.manage", "PROMOTE.GOOGLE_ADS_CAMPAIGN_CREATE", "WIX_MULTILINGUAL.GET_LIMITATION", "LIVE_VIDEO.REACT", "IAM.SIGN_ON_POLICY_READ", "html-editor.create-review-url", "MARKETING.CONSENT_READ", "LOGO_MAKER.EDIT_LOGO", "SCIM.SCIM_SETTINGS_DISABLE", "my-account.manage-mailboxes", "ENTITLEMENTS.ENTITLEMENT_RESUME", "PREMIUM.RESELLER_MANAGEMENT_GET_INTERNAL_REDIRECT_URLS", "PREMIUM.SITE_PREMIUM_ASSETS_SERVICE.LIST_SITE_PREMIUM_ASSETS_OFFLINE_BULK", "BOOKINGS.LOCK_UPDATE", "BLOG.EDIT-ANY-DRAFT", "WIX-FORUM.POST-SUBSCRIBE", "team.view-team", "REVIEWS.REVIEW_INVITE_READ", "HTML_EDITOR.UPSERT_VIEWER_DATA", "site-users.send-invite", "premium.PlansFeaturesControllers.updatePackageFeatures", "PARTNERS.REV_SHARE_ACCOUNT_READ", "DOMAINS.READ_REGISTERED_DOMAINS", "BOOKINGS.FORMS_UPDATE", "ECOM.DELIVERY_REGION_CREATE", "my-account.view-invoices", "VELO.APP_REGISTRY_READ", "BILLING.BUSINESS_BILLING_SETTINGS_READ", "PARTNERS.PARTNERS_PROGRAM_ACHIEVEMENT_CREATE", "premium.updatePackageFeatures", "BAZAAR.CATEGORY_READ", "AUTOMATIONS.ACTION_READ", "VELO.TEAMWORK_ONBOARDING_REPOSITORY_INIT", "INBOX.SEND_MESSAGES_ADMIN", "PREMIUM.GOOGLE_SUBSCRIPTION_ELIGIBILITY", "onboarding.edit-revisions", "AUTOMATIONS.OVERRIDE_APPLICATION_AUTOMATION", "tasks.modify", "folders.create", "PARTNERS.PROPOSALS_QUERY_SETTINGS", "premium.StorePremiumChangePlanApi.getPlanGuidsThatAreEligible", "my-account.enable-workflows", "VELO.GIT_CONNECTION_READ", "WIX_STORES.MANAGE_LOCAL_DELIVERY_OPTIONS", "RESTAURANTS.MENU_EXTRACTIONS_READ", "RESTAURANTS.MODIFIER_GROUP_CREATE", "WIX_DATA.REPLACE_REFERENCES", "WIX-FORUM.COMMENT-READ", "premium.StoreMailboxOldApi.getMailboxDiscountForUser", "PRICING_PLANS.MANAGE_ORDERS", "WIX_EVENTS.READ_OWN_ORDERS", "POS.TIME_CARDS_UPDATE", "ANALYTICS_AND_REPORTS.STATS_READ", "WIX_STORES.READ_SUBSCRIPTIONS", "CRM_CONTACTS.ANALYTICS_DATA_READ", "EDITOR.DEPLOYMENT_UPDATE", "premium.PremiumUserManager.getUserPackagesLocalized", "workflows.modify", "ECOM.READ_CARTS", "RISE.SALES_CHANNEL_READ", "WIX_FORMS.SUBMISSION_CONTACT_UPSERT", "BENEFIT_PROGRAMS.POOL_RESUME", "AUTOCMS.TASK_CANCEL", "SIDEBAR.ENABLE-STORES-TAX-SETTINGS", "AUTOCMS.FOLDER_READ", "member-fields.view", "billing.checkout", "SIDEBAR.ENABLE-MY-ALBUMS", "WIX_EDUCATION.VERIFY_EMAIL", "WIX_STORES.VARIANT_CREATE", "RESTAURANTS.ITEM_DELETE", "DINERS.ADD_RESTAURANT", "BOOKINGS.AVAILABILITY_READ_APPOINTMENT", "ENTERPRISE.ALLOWED_DOMAINS_READ", "SIDEBAR.VIEW-CONTACT", "WIX_STORES.MERCHANT_META_MAP_READ", "SIDEBAR.VIEW_BLOG_OVERVIEW", "BILLING.AVALARA_TAX_GROUPS_MAPPINGS_DELETE", "POS.CASH_DRAWER_MODIFY", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETMONTHLYRECURRINGRECOMMENDEDTOSTARTERMAIL", "WIX-FORUM.CATEGORY-CREATE-POST", "premium.PlansUpgradeMigration.migrate", "contacts-labels.view", "MEDIA.ENTERPRISE_MEDIA_ITEMS_IMPORT", "ENTERPRISE.DOMAIN_IP_RANGES_RULE_CREATE", "BENEFIT_PROGRAMS.PROGRAM_RESUME", "SIDEBAR.ENABLE_PORTFOLIO", "PARTNERS.PARTNER_FEATURES_READ", "premium.reseller-package.read", "PARTNERS.PROJECT_NOTE_UPDATE", "premium.PlansDashboardApi.getPlansSitesPackages", "WIX_FORUM.POST_REMOVE_BEST_ANSWER_COMMENT_ALL", "REVIEWS.READ_REVIEWS_IMPORT_JOB", "SIDEBAR.VIEW-RESTAURANTS-MENUS", "ANYWHERE.THEME_OVERRIDE_READ", "BRANDED_APPS.READ_APP", "WIX_DATA.SHARED_DATA_COLLECTION_LIST", "BLOG.DELETE-CATEGORY", "MEMBERS.MEMBER_DELETE", "premium.cancelPlan", "REPORTS.CREATE", "ECOM.MODIFY_CATEGORY", "WIX-FORUM.POST-EDIT", "CALENDAR.SCHEDULE_READ", "MEMBERS.IDENTITY_ROLES_READ", "SIDEBAR.ENABLE-TASKS", "premium.PlansManagementApi.allowInjectRenewalCoupon", "premium.MailboxSubscriptionService.getSubscription", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.METASITES_LIST", "WIX_STORES.VARIANTS_SET", "WIX_DATA.SHARED_DATA_COLLECTION_DELETE_POLICY", "premium.PlansBoApi.updateAllowAcceptPaymentsForSingleProduct", "PAYMENTS.PAYOUT_READ", "premium.RefundBackofficeApi.getUserRefundRequestsHistory", "ENTITLEMENTS.TEMPLATE_READ", "CONFERENCING.MANAGE_CONFERENCES", "BRANDED_APPS.GET_SUBMISSIONS", "WIX_DATA.RESTORE_BACKUP", "RESTAURANTS.SETTINGS_READ", "SIDEBAR.VIEW-SETTINGS-OVERVIEW", "SIDEBAR.VIEW-INKFROG-CHANNEL", "CATEGORIES.CATEGORY_MOVE_ITEM", "WIX_PARTNERS.SET_MARKETPLACE_CRM_SITE", "PREMIUM.CREATE_PAYMENT_REQUEST", "BADGES.BADGE_UPDATE", "premium.GoogleMailboxStoreApi.getValidPackage", "CHALLENGE_MANAGE.ADD_PARTICIPANT", "ECOM.DELIVERY_CARRIER_ADD", "EDITORX.MIGRATE_WIX_TO_X", "my-account.upgrade-site", "premium.manageLicense", "SIDEBAR.VIEW-STORES-PRODUCTS", "FOLDERS.VIEW", "premium.claimVoucher", "premium.DigitalGoodsBoApi.createSku", "SECRETS_VAULT.SECRET_CREATE", "BRANDED_APPS.WRITE_BUILD_STATUSES", "QUIZZES.READ_QUIZ", "WIXLY.URL_CREATE", "BOOKINGS.BOOKING_POLICY_UPDATE", "DATA_SCIENCE.INVOKE_MODEL_PREDICTION", "SIDEBAR.ENABLE-VIDEO", "WIX-FORUM.POST-LIKE", "premium.DealerToMsnServices.hasMsnMailbox", "transfer-site.transfer", "CASHIER.READ_TRANSACTIONS", "MetaSite.DeleteAll", "VELO.USER_CODE_ADD_VELO_DEPENDENCY", "ECOM.ORDERS_DELTAS_COMMIT", "premium.BoToMsnService.getAllUserEmailPackageUserGuid", "premium.PlansBoApi.disablePackage", "SIDEBAR.VIEW-FACEBOOK-CHANNEL", "SIDEBAR.ENABLE-SOCIAL-POSTS", "ECOM.REINDEX_ORDERS", "PARTNERS.PROFILE_READ", "PRO_GALLERY.MANAGE", "REPORTED_CONTENT.MANAGE", "BILLING.AVALARA_TAX_MERCHANT_CREDENTIALS_UPDATE", "ENTITLEMENTS.ENTITLEMENT_PAUSE", "WIX_DATA.LIST_INDEXES", "WIX_STORES.INFO_SECTION_READ", "premium.PlansPackagePickerControllers.loadPlansPackagePickerFromUpgradeWebsite", "WIX_FORUM.DRAFT_POST_APPROVE", "blog.admin", "my-account.transfer-site", "WIXSTUDIO.CLIENT_KIT_RESOURCE_READ", "Account.GetAccountProperties", "ECOM.READ_LOCAL_DELIVERY_OPTIONS", "MEMBER_TAGS.ADD_TAG", "SIDEBAR.VIEW-PARTNERS-RESOURCES", "private-media.manage", "WIX_STORES.VARIANT_DELETE", "BLOG.EDIT_SEO", "SIDEBAR.VIEW_BLOG_MONETIZATION", "MOBILE_APP.SIDEBAR", "IAM.CONNECTION_CONFIG_READ", "ECOM.DRAFT_ORDERS_DELETE_DISCOUNTS", "premium.DigitalGoodsBillingAndPaymentsApi.getSkus", "ACCOUNT_AUTH_SETTINGS.ADD_TECHNOLOGY", "premium.VouchersDashboardApi.getDomainsVoucherCount", "premium.StoreAuthorization.viewSiteOffering", "CHALLENGE-MANAGE.INVITE-TO-CHALLENGE", "TABLE_RESERVATIONS.OLD_RESERVATION_MIGRATE", "premium.PlansStoreApi.deliverChangePlan", "VELO.TEAMWORK_ONBOARDING_REPOSITORY_CREATE", "BILLING.TAX_GROUP_DELETE", "VELO.NPM_PACKAGE_INFO_RESOLVE_DEPENDENCIES", "premium.assets.cancelInTrail", "CALENDAR.SCHEDULE_UPDATE_OWN", "WIX_STORES.RIBBON_CREATE", "premium.PlansEmailSender.getImmediateCancellationByUserEmail", "cashier.manage", "MEDIA.GENERATION_OUT_PAINT", "VELO.DATABASE_DEPLOYMENT_LIST", "BRANDED_APPS.LIST_MANDATORY_IAP_PRODUCTS", "GROUPED_BOOKINGS.GROUPED_BOOKINGS_CONFIRM", "MARKETPLACE_ACTION.ACCOUNT_WRITE", "RESTAURANTS.LABEL_CREATE", "ENTERPRISE.CUSTOM_HEADERS_VIEW_APP", "VIDEO-MAKER.CREATE", "premium.GoogleMailboxBillingAndPaymentsApi.getPackageBySbsServiceId", "MODERATION.READ", "CHALLENGE-MANAGE.CREATE-STEP", "FILE_SHARE.MOVE", "CASHIER.PAYMENT_METHOD_TYPES_READ", "my-account.view-music-site-traffic", "WIX_MULTILINGUAL.READ_TRANSLATIONS", "ENTITLEMENTS.ACCOUNT_OPEN", "PAYMENTS.DISPUTE_CASES_READ_EVIDENCE_DOCUMENTS", "SITE_PROPERTIES.UPDATE_BUSINESS_CONTACT", "ECOM.MODIFY_INVOICES", "WIX_STORES.READ_MARKETPLACES_DATA", "DOCUMENT.MODIFY_SETTINGS", "SIDEBAR.ENABLE_GOOGLEFORMERCHANTS_CHANNEL", "ACTIVITY_LOGS.SITE_ACTIVITY_CREATE", "BOOKINGS.MANAGE_BOOKINGS", "BADGES.ASSIGN", "WIX_DATA.DATA_JOB_LIST", "VELO.SPI_CONNECTION_READ", "INSTAGRAM_ACCOUNTS.DISCONNECT", "WIX_EVENTS.READ_SITE_SETTINGS", "WIX_EVENTS.READ_DRAFT_COMPONENT", "OPEN_AI_CLIENT.AUDIO_TRANSCRIPTION_ACCOUNT_LEVEL", "WIX_STORES.PRODUCT_OPTION_CREATE", "GROUPED_BOOKINGS.GROUPED_BOOKINGS_GET_AVAILABILITY", "DATA_SCIENCE.LLM_INVOKE", "WIX_DATA.DELETE_COLLECTIONS_SNAPSHOT", "MEDIA.ENTERPRISE_MEDIA_CATEGORIES_UPDATE", "premium.GenPackageListController", "ECOM.DISCOUNT_RULES_CREATE", "BILLING.LIST_IMPLEMENTERS", "premium.WixDealerService.getPremiumPlansPackagePickerIdForSite", "ENTERPRISE.SECURITY_HEADERS_READ", "ECOM.PICKUP_LOCATION_DELETE", "wix-stores.create-orders", "ECOM.GET_SHIPPING_OPTIONS", "premium.BoToMsnService.getSubscriptionData", "SIDEBAR.VIEW-INBOX-SETTINGS", "WIX_FORUM.COMMENT_READ", "VIDEO-MAKER.MANAGE-ACCESS", "BLOG.READ_DRAFT", "EDITOR_ENV.REFRESH", "MEMBERS.MEMBER_ABOUT_READ", "AUTOCMS.ENTERPRISE_CMS_DASHBOARD_ACCESS", "ONE_APP.DASHBOARD_MEDIA_MANAGER_VISIBLE", "RATING.DEFINITION_UPDATE", "premium.PremiumMsnServices.getAllUserPackagesByDomain", "SIDEBAR.VIEW-PARTNERS-BETA", "PROMOTE.GOOGLE_ADS_CAMPAIGN_UPDATE", "RELEASE_MANAGER.PUBLISH_RC", "premium.PlansManagementApi.cancelPackage", "PROMOTE.GOOGLE_ADS_APP_INSTALLER_MANAGE", "DEVELOPMENT_SITES.CREATE", "premium.PlansStoreApi.getAllPlansProducts", "BLOG.SETTINGS_READ", "premium.WixDealerService.getBannerIdForSite", "my-account.open-old-ecom", "WIX_STORES.READ_PRODUCTS_QUERY_WITH_BIG_PAGE_LIMIT", "ENTERPRISE.DOMAIN_IP_RANGES_RULE_READ", "premium.PlansStoreApi.getAllUserPackages", "PROMOTE.PUBLISHER_ITEM_CANCEL_SCHEDULED", "BADGES.READ", "premium.RefundUserApi.getAllPurchase", "PRICING_PLANS.CUSTOM_FORM_READ", "QUIZZES.READ_SUBMISSION", "WIX_FORMS.VIEW", "premium.WixDealerService.getChangePlanPackagePickersForVerticals", "DEV_CENTER.DELETE_COMPONENTS", "MANAGE_ORDERS", "INBOX_ID_MAPPINGS.DELETE", "TIPS.UPDATE_SETTINGS", "BILLING.TAX_GROUP_CREATE", "IDENTITY.GROUP_SUBJECT_ADD", "RESTAURANTS.OPERATION_CREATE", "ECOM.PERFORM_VALIDATIONS", "ECOM.DISCOUNT_RULES_DELETE", "PARTNERS.REV_SHARE_ACCOUNT_CREATE", "CONTACTS_ATTACHMENTS.VIEW", "BADGES.BADGE_ASSIGN", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.GOOGLE_MAILBOX_COUNT", "ECOM.DRAFT_ORDERS_DELETE", "SMS_PROVIDER.SMS_ACCOUNT_CREATE", "WIX_HEADLESS.WIX_URL_CREATE", "REFERRALS.READ_REWARDS", "PRICING_PLANS.CHANGE_DRAFT_START_DATE", "WIX_DATA.CREATE_SCHEMAS_SNAPSHOT", "ACCOUNT_MANAGER.VIEW_WORKSPACE_ENABLE_PAGE", "BRANDED_APPS.GET_LOGIN_SECRETS", "VELO.VSCODE_USER_PROFILE_READ", "SIDEBAR.ENABLE-ROLES-AND-PERMISSIONS-SETTINGS", "ENTITLEMENTS.ACCOUNT_UPDATE", "SIDEBAR.ENABLE-VIRTUAL-NUMBERS-SETTINGS", "WIX_FORUM.SUBSCRIBE", "EDITOR.GET_BRANCHES", "SIDEBAR.VIEW-CODE-EMBEDS-SETTINGS", "BRANDED_APPS.GET_COOKIES", "premium.PlansRefundApi.setAutoRenewOffBiData", "premium.VouchersReadOnlyApi.getVoucherSettings", "TIPS.UPDATE_SLOT_STATUS", "WIX_RESTAURANTS.READ_ORDER_SETTINGS", "WIX_DATA.DRIVER_UPDATE_ITEM", "WIX_FORMS.SUBMISSION_DELETE", "WIX_STORES.INFO_SECTION_GET_OR_CREATE", "USERS.UPDATE_EMAIL", "SIDEBAR.ENABLE-SECRETS-MANAGER-SETTINGS", "premium.PremiumMsnRpc.getDomainInfo", "WIX_EDUCATION.TEST_SITE_LEVEL_NO_METASITE", "WIX_COMMENTS.BULK_COMMENT_HIDE", "premium.StoreMailboxService.getMailboxSaleTypeForDomain", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.RECOLLECT", "ENTITLEMENTS.TRANSACTION_READ", "POS.TIP_READ", "EDITORX.CONTENT_MANAGER", "OAUTH_APP.APP_READ", "premium.GmailTransferSiteApi.changeGmailPackageOwnership", "PROMOTE.GOOGLE_ADS_GET_SUGGESTIONS", "ECOM.DRAFT_ORDERS_COMMIT", "my-account.invite-contributor", "SIDEBAR.VIEW-STORES-SHIPPING-SETTINGS", "WIX_FORMS.FORM_SCHEMA_READ", "SITE_BRANCHES.DELETE_BRANCH", "SIDEBAR.ENABLE_DONATIONS_PERMISSION", "ONEAPP.VIEW_PRODUCTS", "SIDEBAR.VIEW-ART-STORE", "CONTACTS_FILTERS.MODIFY", "LIVE_VIDEO.READ_SESSIONS", "premium.PlansStoreApi.getValidUserPackageBySiteGuid", "ECOM.DELIVERY_CARRIER_REMOVE", "VLEO.NPM_REQUESTS_READ", "ACCESSIBILITY.MONITORING_REPORT_READ", "WIX_EVENTS.READ_NOTIFICATION_CONFIG", "SIDEBAR.ENABLE-MAILBOXES", "POS.CHECKOUT-NO-SALE", "MEDIA.ENTERPRISE_MEDIA_ITEMS_GENERATE_UPLOAD_URL", "PREMIUM.USE_PAYMENT_SOURCE", "ECOM.READ_TRIGGERS", "VELO.SINK_UPDATE", "WIX_RESTAURANTS.SERVICE_FEES_RULES_UPDATE", "DOCUMENT.READ_MENUS", "CALENDAR.MANAGE_SUGGESTION_WIDGET", "WIX_FORMS.MANAGE", "WIX_STORES.PRODUCT_OPTION_UPDATE", "GENIE.CHAT_SERVICE_MANAGE", "WIX_DATA.DRIVER_FETCH_REFERENCED", "ENTITLEMENTS.ACCOUNT_READ", "ECOM.ORDER_MODIFY_DIGITAL_FILE", "PREMIUM.UNASSIGN_FROM_SITE", "SIDEBAR.ENABLE_TABLE_RESERVATIONS", "premium.StoreMailboxOldApi.getMailboxSaleTypeForDomain", "HEADER.VIEW_CREATE_SITE_ON_HEADER", "FAQ.SET_QUESTION_LABEL", "premium.SubscriptionsManager.listSubscriptions", "ACCOUNT_ROLES.GET_SITE_ROLES", "PAYMENTS.TAX_DOCUMENT_DOWNLOAD", "SIDEBAR.VIEW_COMMUNITY", "premium.ManagePremiumController", "community.view-settings", "AUTOMATIONS.AUTOMATION_CREATE", "SIDEBAR.VIEW-SEO-SETTINGS", "BUSINESS_MANAGER.CRM_TASKS.TASK_WIDGET", "AUTOCMS.FOLDER_DELETE", "BOOKINGS.WAITLIST_READ", "WIX_HEADLESS.WIX_URL_VALIDATE_CALLBACK_URL", "MEDIA.SITE_MEDIA_FILES_RESTORE_FROM_TRASH", "my-account.view-inbox", "WIX_FORMS.SUBMIT", "LOYALTY.READ_OWN_TRANSACTIONS", "REVIEWS.ADD_ITEMS_TO_REVIEWS_IMPORT_JOB", "MEDIA.SITE_MEDIA_FILES_IMPORT", "premium.SubscriptionsManager.listSubscriptionCancellationRequests", "premium.PlansStoreApi.getActiveProduct", "my-account.view-purchased-plans", "SIDEBAR.ENABLE-PARTNERS-NEWS", "premium.PlansPurchasePageControllers.getPremiumPlanPurchaseOrderPageData", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETNEARRENEWALRECOMMENDEDTOSTANDARDORPLUSMAIL", "WIX-FORUM.POST-READ", "WIX_DATA.SET_APP_COLLECTION_VISIBILITY", "ACCOUNT_AUTH_SETTINGS.GET_FEDERATED_METHODS", "premium.PlansBillingAndPaymentsApi.getTpasByUserGuid", "WIX_HOTELS.VIEW_RESERVATIONS", "WIX-FORUM.POST-DELETE-ALL", "ONLINE_PROGRAMS.PROGRAM_READ", "MEDIA.SITE_MEDIA_FOLDERS_CREATE", "CLOUD_DATA.SCHEMA_NOTIFICATIONS_SUBSCRIPTIONS", "SIDEBAR.ENABLE-RESTAURANTS-PHONE-OREDERS", "ACCOUNT_ROUTING.ROUTE_DELETE", "SIDEBAR.VIEW_BOOKINGS_PAGE_LINKS", "BOOKINGS.BOOKING_POLICY_CREATE", "my-account.gdpr-users-of-user", "SIDEBAR.ENABLE-STORES-SETTINGS", "AUTOCMS.TASK_DELETE_BY_QUERY", "CATEGORIES.CATEGORY_DELETE", "BOOKINGS.RESOURCE_UPDATE", "CHALLENGE-MANAGE.GET-GROUP-STATS", "WIX-FORUM.FORUM-EDIT", "premium.GoogleMailboxToBoApi.getAllUserPackagesByDomain", "WIX_DATA.DATA_JOB_LIST_LOGS", "premium.GenPackageListController.internalHandleRequest", "premium.DigitalGoodsBillingAndPaymentsApi.getBySbsServiceId", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_READ", "VELO.USER_CODE_LIST_DEPENDENCIES", "WIX_STORES.BRANDS_UPDATE", "premium.PaymentsHistoryApi.isSupportedNewInvoice", "VELO.APP_DEPLOY", "LIVE_VIDEO.MANAGE_REACTIONS", "premium.WixDealerService.getPremiumPlansPackagePickerIdForApp", "NOTIFICATION_PREFERENCES.BULK_GET_STATE_ACCROSS_SITES", "SIDEBAR.VIEW_CHAT_DASHBOARD", "CALENDAR.EVENT_READ", "MEMBERS.MEMBER_MUTE", "Account.RemoveTeamMember", "account-manager.view-subscriptions-on-sidebar", "TABLE_RESERVATIONS.RESERVATIONS_AGGREGATION_READ", "REVIEWS.REVIEW_INVITE_CREATE", "premium.PlansManagementApi.getUserPlansInfo", "BLOG.IMPORT_FROM_EXTERNAL_SITES", "premium.TpaTransferSiteApi.getSiteTpas", "PARTNERS.PROPOSALS_ACCOUNT", "MOBILE_APPS.ALL", "premium.TransferSiteToMsnApi.getQuantityAndUsers", "MEMBERS_GROUP.MANAGE", "SMS_PROVIDER.SMS_ACCOUNT_DELETE", "BILLING.TAX_RULE_CREATE", "STUDIO.VIEW_WORKSPACE_DISABLE", "WIX_FORUM.CATEGORY_CREATE", "WIX_DATA.CREATE_INDEX", "MEMBERS.ACTIVITY_COUNTERS_READ", "PARTNERS.PROPOSALS_DELETE", "BOOKINGS.AVAILABILITY_READ", "premium.transferSite.acceptSiteTransfer", "premium.PlansBoApi.getDistinctFeaturesTranslationKeys", "premium.PremiumDealerService.hasMailbox", "WIX_STORES.INFO_SECTIONS_UPDATE", "CALENDAR.ROLLOUT_STATUS_UPDATE", "IAM.AUTHENTICAITON_SIGN_ON", "WIX_FORMS.VIEW_EMAILS", "my-account.view-forms", "wix-code.google-project-admin", "ECOM.MODIFY_CARTS", "ONE_APP.CONTACT_DETAILS", "WIX_STORES.DELETE_ABANDONED_CARTS", "MODERATION.CHANGE_STATUS", "ACCOUNT.GET_SUB_ACCOUNTS", "TABLE_RESERVATIONS.RESERVATION_DELETE", "PRICING_PLANS.CUSTOM_FORM_UPDATE", "premium.MsnToDashboardApi.getMailboxInfoByDomain", "MARKETING_TAGS.MANAGE", "REVIEWS.CREATE_REVIEW", "MEMBERS.REPORTS_UPDATE", "my-account.view-transactions", "onboarding.save", "BADGES.BADGE_READ_MEMBERS", "PROPOSALS.PROPOSAL_CREATE", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.ANGULAR_EXPERIMENTS", "SIDEBAR.ENABLE-BOOKINGS-CALENDAR", "MEDIA.GENERATION_TEXT_TO_IMAGE", "SIDEBAR.VIEW-CO-BRANDING", "SIDEBAR.OAUTH_APPS_SETTINGS", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_MARK_AS_PENDING", "WIX_FORUM.COMMENT_VOTE", "PORTFOLIO.SYNCED_PROJECTS_STOP_SYNC", "premium.StoreMailboxService.getMailboxSaleTypeForUser", "LIVE_VIDEO.MANAGE_SESSIONS", "WIX_STORES.MODIFY_POS_VISIBILITY", "SIDEBAR.VIEW-MOBILE-APP-SETTINGS", "WIX_ASCEND.SEE_ASCEND_PP", "BOOKINGS.FORMS_CREATE", "MY_ACCOUNT.BULK_MOVE_SITE_TO_TRASH", "WIX_COMMENTS.COMMENT_CREATE", "WIX_STORES.MODIFY_SUBSCRIPTIONS", "ECOM.READ_FULFILLMENTS", "premium.GoogleMailboxToBoApi.getLastInvalidPackageByDomainName", "PRICING_PLANS.REGISTER_OFFLINE_ORDERS", "SIDEBAR.VIEW-ALBUMS-STORE", "DOCUMENT.READ_ROUTERS", "WIX_DATA.READ_DEV_SCHEMAS", "WIX_EVENTS.STAFF_MEMBER_CREATE", "MEDIA.SITE_MEDIA_FILES_UPLOAD", "WIX_EVENTS.STAFF_MEMBER_UPDATE", "premium.PremiumManagementEmailSenderApi.sendEmail", "MARKETPLACE_ACTION.ACCOUNT_READ", "ONLINE_PROGRAMS.ASSIGN_CATEGORIES", "CODUX.IDE_FILES_READ", "premium.RefundBackofficeApi.createEligibleRefundRequest", "WIX_MULTILINGUAL.CONTENT_CREATE", "INBOX.SEND_MESSAGES", "PAYMENTS.DISPUTES_SUBMIT", "WIX_CODE.NPM_REQUESTS_LIST_BY_NAMES", "ENTERPRISE.CUSTOM_TEMPLATES_VIEW", "CASHIER.ONBOARDING_AVAILABILITY_READ", "premium.GenericPurchasePageControllers.createGenericOrderPageForWixUsers", "SIDEBAR.VIEW_BILLING_OVERVIEW", "WIX_DATA.DRIVER_INSERT_ITEM", "SIDEBAR.ENABLE-BOOKINGS-SETTINGS", "TABLE_RESERVATIONS.RESERVATION_CREATE_HELD", "PRO_GALLERY.READ", "CHALLENGE-PARTICIPATE.RESOLVE-APPROVAL", "BOOKINGS.NOTIFICATIONS_BROADCAST", "workflows.view", "MEMBERS.MEMBER_FOLLOW", "premium.PPPlansCmsManager.getCurrencySettings", "site-users.delete-invite", "WIX_DATA.TMP_FILE_UPLOAD_CREATE", "IAM.OIDC_CONFIG_READ", "SIDEBAR.VIEW-INVOICE-SETTINGS", "crm-inbox.manage", "premium.AppMarketTempApi.addSbsProductAndTpaSku", "WIX_EMAILS.SENDING_DOMAIN_AUTHENTICATE", "PORTFOLIO.PROJECT_ITEM_DELETE", "WIX_MULTILINGUAL.ONE_CLICK_TRANSLATION", "WIX_DATA.LIST_BACKUPS", "IAM.CONNECTION_CLIENT_READ", "ENTITLEMENTS.TEMPLATE_UPDATE", "PREMIUM.START_ACCOUNT_MIGRATION", "CHALLENGE-PARTICIPATE.SKIP-PARTICIPANT-STEP", "VELO.SINK_UPSERT", "SCIM.USER_CREATE", "CURRENCY_CONVERTER.READ_CURRENCIES", "RESTAURANTS.ITEM_CREATE", "SIDEBAR.ENABLE-MULTILINGUAL-SETTINGS", "ECOM.CREATE_BACK_IN_STOCK_NOTIFICATION_REQUESTS", "SIDEBAR.ENABLE-STORE-ORDERS", "PORTFOLIO.PROJECT_UPDATE", "EDITORX.INSPECTOR_BUTTON", "SIDEBAR.VIEW-GENERAL-INFO", "premium.PlansPurchasePageControllers.createPlansOrderPageV2", "URL_MAPPER.WRITE", "wix-seo.manage", "RESTAURANTS.SETTINGS_UPDATE", "EDITORX.EDIT_NOT_CONTENT", "EDITOR.CONCURRENT_WATCHER_DELETE", "BILLING.AVALARA_TAX_CREDENTIALS_DELETE", "my-account.rename-site", "WIX_EVENTS.READ_GUESTS", "SIDEBAR.VIEW-PLANS", "site-actions.duplicate-site", "BILLING.CALCULATE_TAX", "WIX_DATA.UPDATE_SCHEMA", "CALENDAR.SCHEDULE_CHECK_FREE_TIME", "VELO.NPM_PACKAGE_REQUEST_CREATE", "WIX_FORUM.DRAFT_POST_READ", "PREFERRED_APPS.MEMBER_WRITE", "VOTES.REMOVE", "WIX_MULTILINGUAL.MANAGE_VERTICAL_MAPPER", "premium.RegDotRuPremiumApiFacade.nop", "CONTACTS_SEGMENTS.SEGMENT_SET_TEMPLATE_ID", "WIX_COMMENTS.COMMENT_CONTENT_UPDATE", "TABLE_RESERVATIONS.RESERVATION_UPDATE", "WIXSTUDIO.SITE_CLIENT_DELETE", "DEVELOPMENT_SITES.DELETE", "BOOKINGS.SERVICES_PRICING_PLANS_ADD", "cashier.read-payments", "BUSINESS_MANAGER.ENABLE_POS_CHECKOUT", "premium.WixDealerService.getPremiumPlansPackagePickerIdForAccount", "WIX_CODE.VSCODE_USER_PROFILE_READ", "SIDEBAR.VIEW-VIRTUAL-NUMBERS-SETTINGS", "premium.FeaturesManager.ListFeatures", "ONLINE_PROGRAMS.SECTION_READ", "WIX_STORES.VARIANT_UPDATE", "premium.RefundEmailSender.getSuccessRefundEmail", "MEMBERS.MEMBERS_AREA_SITE_STRUCTURE_READ", "CALENDAR.SCHEDULE_UPDATE", "app-market.manage-app", "PRICING_PLANS.CUSTOM_FORM_SUBMISSION_CREATE", "DATA_EXTENSION_SCHEMA.READ", "SIDEBAR.ENABLE_PLATFORM_VISIBILITY", "WIX_STORES.WISH_TOKEN_CREATE", "ENTITLEMENTS.ENTITLEMENT_CREATE", "WIX_VIDEO.MANAGE_LIBRARY", "WIX_DATA.AGGREGATE", "PREMIUM.ASSIGN_PAYMENT_SOURCE", "WIX_STORES.MARKETPLACE_VIEW_PRODUCT", "WIX_STORES.MARKETPLACE_SETTINGS_UPDATE", "WIX_HOTELS.VIEW_LANGUEGES", "MEMBERS.MEMBER_BLOCK", "SIDEBAR.VIEW-MANAGE-APPS", "API_KEYS.REVOKE", "WIX-GROUPS.APPROVE_NEW_GROUP", "WIX-FORUM.COMMENT-REPORT", "WIX_HOTELS.VIEW_GUEST_RELATIONS", "PREFERRED_APPS.READ", "WIX_STORES.PRODUCT_CREATE", "premium.UserPremiumAssetsService.recollectUser", "premium.PlansEmailSender.getPlanNearRenewalEmail", "IAM.ENABLED_CONNECTIONS_DELETE", "CONFERENCING.MANAGE_ACCOUNT_CONNECTIONS", "WIX_FORUM.POST_READ", "premium.PlansStoreApi.getAllActivePackages", "MODERATION.CONFIGURE", "premium.InternalConnectDomainApi.checkIfDomainIsAvailableForPurchase", "premium.MsnBillingAndPaymentsApi.getPackageBySbsServiceId", "PARTNERS.PROJECT_NOTE_READ", "PREMIUM.GET_SUBSCRIPTION_NOTIFICATION", "ENTITLEMENTS.ENTITLEMENT_RESERVATION_CANCEL", "WIX_EDUCATION.OPEN_ACTIVITY", "VELO.APP_MARK_GC", "GOOGLE_MAILBOX_MANAGEMENT_API.GET_GOOGLE_USERS", "PUBLIC_HTML_INFO.PUBLISHED_SITE_DETAILS_READ", "CALENDAR.EVENT_CANCEL", "SIDEBAR.ENABLE-SETTINGS-LOBBY", "pro-gallery.manage", "ECOM.READ_PAYMENT_AGREEMENTS", "news-feed.delete-feed-item", "WIX-FORUM.POST-MOVE", "DOCUMENT.READ_PAGES", "PAPYRUS.CREATE_DOCUMENT", "SIDEBAR.VIEW-SEO-HOME", "PROMOTE.ADS_TXT_READ", "CALENDAR.EXTERNAL_CALENDAR_EVENTS_READ", "PROPOSALS.PROPOSAL_ARCHIVE", "BOOKINGS.RESOURCE_CREATE", "premium.PremiumContactsManager.getContactsQuota", "MOBILE_APPS.SITE_LEVEL_READ", "REVIEWS.VOTE", "Account.CheckTeamStatus", "premium.PlansEmailSender.getPlanSecondUpgradeEmail", "PROMOTE.SENDER_DETAILS_MARK_AS_DEFAULT", "PREMIUM.PAYMENT_REQUEST_READ", "CALENDAR.ROLLOUT_STATUS_CREATE", "WIX-FORUM.CATEGORY-READ-ALL", "MEMBERS_AREA.MEDIA_CREDENTIALS", "BLOG.IMPORT_POSTS_FROM_WIX_SITE", "BILLING.AVALARA_TAX_MERCHANT_CREDENTIALS_READ", "ONEAPP.VIEW_ORDERS", "ECOM.MODIFY_DISCOUNT_RULES", "DOCUMENT.READ_SEO", "CHALLENGE-MANAGE.DELETE-STEP", "WIX_EVENTS.UPDATE_OWN_ORDERS", "WIX_STORES.VARIANTS_CREATE", "SITE_ACTION.REMOVE_FROM_TRASH", "premium.GenericPurchasePageControllers.createGenericOrderPageForFullPageRedirect", "PARTNERS.PARTNER_QUALITY_CREATE", "WIX_STORES.MARKETPLACE_PRODUCT_OVERRIDES_DELETE", "WIX_FORUM.CATEGORY_EDIT", "currency-converter.modify-site-currencies", "SIDEBAR.VIEW_PARTNER_SETTINGS", "WIX_DATA.LIST_COLLECTIONS", "RESTAURANTS.VARIANT_CREATE", "CALENDAR.PARTICIPATION_UPDATE", "my-account.enable-forms", "MEDIA.GENERATION_IN_PAINT", "wix-stores.read-abandoned-carts", "ECOM.DELIVERY_REGION_DELETE", "SECRETS_VAULT.SECRET_METADATA_READ", "WIX-FORUM.COMMENT-EDIT", "SIDEBAR.ENABLE-ALBUMS-STORE", "PROMOTE.SUGGESTIONS_UPDATE", "premium.MsnBillingAndPaymentsApi.getByDomainName", "LOYALTY.MANAGE_EARNING_RULES", "WISHLIST.MANAGE-SITE-WISHLISTS", "RESTAURANTS.DELIVERY_ORDER_CREATE", "MARKETING.CONSENT_DELETE", "RESTAURANTS.SECTION_DELETE", "BRANDED_APPS.UPDATE_SESSION", "BRANDED_APPS.CREATE_SUBMISSION", "WIX_EDUCATION.QUERY_COMMENTS", "EDITOR.READ_SEO", "BLOG.CHOOSE_RELATED_POSTS", "WIX_DATA.INSERT_REFERENCE", "PAYMENTS.ACCEPT_DISPUTE", "BOOKINGS.BOOKING_MANAGE", "WIX_DATA.UPDATE_COLLECTION", "DOCUMENT.READ_THEME", "TIPS.UPDATE_DASHBOARD_CONFIG", "CHALLENGE_MANAGE.CLONE_SECTION", "BENEFIT_PROGRAMS.POOL_UPDATE", "SIDEBAR.ENABLE-BLOG-POSTS", "PAYMENTS.REFUND_CREATE", "PREMIUM.CHECKOUT-SERVER-API-UPDATE-PAYMENT-SOURCE", "REVIEWS.START_REVIEWS_IMPORT_JOB", "WIX_DATA.UNREGISTER_CONNECTOR", "BOOKINGS.STAFF_MEMBER_READ_ASSOCIATED_CONFERENCING_PROVIDERS", "SITE_BRANCHES.UPDATE_BRANCH", "WIX_EVENTS.READ_EVENT_DASHBOARD", "WIX_RESTAURANTS.SERVICE_FEES_RULES_DELETE", "ECOM.DELIVERY_PROFILE_DELETE", "PAYMENTS.DISPUTE_CASES_CREATE", "PRICING_PLANS.CUSTOM_FORM_CREATE", "VELO.TEAMWORK_ONBOARDING_AUTHORIZE_USER", "smart-actions.manage-action", "WIX_STORES.READ_SHIPPING_RULES", "VIRTUAL_NUMBERS.MANAGE", "premium.PremiumMsnRpc.updateMsnTxtVerificationRecord", "CONTACTS_ACTIVITIES.MODIFY", "VELO.SINK_READ", "CASHIER.ONBOARDING_AVAILABILITY_UPDATE_CBD_FLOW", "PROPOSALS.PROPOSAL_DECIDE", "RESTAURANTS.MENU_LIST", "INSTAGRAM_ACCOUNTS.CONNECT", "WIX_EVENTS.READ_TICKET_DEFINITIONS", "AUTOCMS.READ_METADATA", "CHALLENGE_MANAGE.UPDATE_CATEGORY", "TOPICS.UPDATE", "RECOLLECTACCOUNTREQUEST.PREMIUM_RECOLLECT_ACCOUNT", "account-manager.view-mailboxes-on-sidebar", "my-account.view-mailboxes", "ENTITLEMENTS.TEMPLATE_CREATE", "SIDEBAR.VIEW-BLOG-SCHEDULED", "LOYALTY.READ_OWN_COUPONS", "RESTAURANTS.SECTION_QUERY", "BILLING.TAX_RULE_READ", "premium.TransferMailSender.getNewTransferRequestSentEmail", "AUTOCMS.RULES_WRITE", "BENEFIT_PROGRAMS.ITEM_DELETE", "BILLING.AVALARA_TAX_MERCHANT_CREDENTIALS_DELETE", "SIDEBAR.VIEW-AUTOMATIONS", "WIX_EDUCATION.SAFETY_CHECK", "premium.PlansPackagePickerControllers.loadPlansPackagePickerWithAllParams", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_GET_AVAILABILITY", "ECOM.DELIVERY_CARRIER_DETAILS_READ", "MEMBERS.MEMBER_ROLES_MANAGE", "my-account.import-contacts", "WIX_DATA.GET_CONNECTOR", "SIDEBAR.VIEW-VIDEO-SETTINGS", "PARTNERS.FEEDBACK_HAS_COMMENTS", "wix-price-quotes.manage", "one-app.manage", "CHANNELS.CUSTOM_TEMPLATES_EDIT", "PROPOSALS.PROPOSAL_READ", "POS.REPORTS-MANAGE-CASH-DRAWER", "BRANDED_APPS.GET_SITE_URL", "BENEFIT_PROGRAMS.BALANCE_READ", "ECOM.READ_ORDERS_SETTINGS", "my-account.view-video-insights", "WIX_PARTNERS.UPDATE_PARTNER_DASHBOARD", "INBOX_ID_MAPPINGS.CREATE", "SIDEBAR.ENABLE-ALBUM-STORE", "CONTACTS.SEGMENT_COLLECTION_DELETE", "WIX_CODE.VSCODE_ONBOARDING_READ", "WIX_COMMENTS.COMMENT_QUERY", "premium.PremiumRefundServiceApi.getAllPurchase", "premium.setAutoRenewOn", "PROMOTE.FACEBOOK_ADS_ACCOUNT_READ", "STAFF_MEMBERS.STAFF_MEMBER_UPDATE", "my-account.manage-premium", "SIDEBAR.VIEW-VIDEO-CHANNELS", "AUTOMATIONS.REPORT_EVENT", "premium.PlansFeaturesControllers.loadPlanFeaturesApp", "premium.WixDealerService.getBestResultForEachVertical", "WIX_EMAILS.SENDING_DOMAIN_READ", "WIX_STORES.INFO_SECTION_UPDATE", "PAYMENTS.DISPUTE_CASES_REMOVE_EVIDENCE", "BRANDED_APPS.VERIFY_APPLE_CONNECTION", "calendar.manage-resources", "APPS_INSTALLER.INSTALL_SITE_LEVEL", "CONTACTS.SEGMENT_COLLECTION_READ", "MEDIA.SITE_MEDIA_FOLDERS_RESTORE_FROM_TRASH", "DOMAINS.MANAGE_REGISTERED_DOMAINS", "SIDEBAR.ENABLE-BOOKINGS-STAFF-AVAILABILITY", "premium.GoogleMailboxBillingAndPaymentsApi.getUserMailboxes", "premium.PlansPurchasePageControllers.plansGracePeriodPurchasePage", "SIDEBAR.ENABLE-BLOG-SCHEDULED", "WIX_STORES.BRAND_DELETE", "DOCUMENT.EDIT_DESIGN_AND_LAYOUT", "SIDEBAR.VIEW_MARKETPLACE_OVERVIEW", "WIX_MULTILINGUAL.MANAGE_LANGUAGES_STATUS", "PRICING_PLANS.READ_ORDERS", "currency-converter.read-currencies", "POS.POS_INSTANCE_SETTINGS_READ", "IAM.SIGN_ON_POLICY_UPDATE", "SIDEBAR.VIEW-SOCIAL-POSTS", "WIXSTUDIO.WORKSPACE_DISABLE", "RESTAURANTS.MODIFIER_GROUP_DELETE", "SIDEBAR.ENABLE-BOOKINGS-SERVICES", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.CURRENCY", "my-account.manage-back-office", "BUSINESS_MANAGER.CRM_CONTACTS.ANALYTICS_DATA_READ", "WIX-GROUPS.READ_ALL_GROUPS", "HOPP.CONNECT_SITE", "html-editor.save", "premium.TransferMailSender.getTransferRequestCompletedEmail", "WIX_FORUM.COMMENT_DELETE", "REVIEWS.CREATE_REVIEWS_IMPORT_JOB", "WIX_STORES.STORES_LOCATION_CREATE", "WIX_EVENTS.READ_SITE_EVENTS_SUMMARY", "SIDEBAR.ENABLE-RESTAURANTS-ORDERS-SETTINGS", "SIDEBAR.VIEW-BLOG-CATEGORIES", "premium.RefundBackofficeApi.approveServicesRefund", "SIDEBAR.VIEW-GOOGLE-MY-BUSINESS", "RESTAURANTS.MODIFIER_CREATE", "premium.PaymentsHistoryApi.collectAndPersistInvoiceData", "WIX_EDUCATION.STUDENT_VALIDATION", "MEMBERS.MEMBERS_WITH_PERMISSION_READ", "SIDEBAR.VIEW_WISH_CHANNEL", "CATEGORIES.CATEGORY_REMOVE_ITEM", "TAGS.TAG_READ", "premium.WixDealerService.getCurrentPackagePickerOptions", "WIX_FORUM.COMMENT_LIKE", "premium.PlansDashboardApi.getSiteTpaPackages2", "WIX_EVENTS.READ_TICKET_GUEST_DETAILS", "DOCUMENT.MIGRATE_SITE", "WIX_EDUCATION.VALIDATE_STUDENTS", "WIXSTUDIO.AGENCY_CONTACT_UPDATE", "premium.ChangePlanControllers.switchAndExtend", "ECOM.MODIFY_ORDERS", "premium.PlansRefundApi.voidCancellationRecords", "CHALLENGE-PARTICIPATE.CREATE-ORDER", "PROPOSALS.PROPOSAL_TEMPLATE_READ", "PAPYRUS.MANAGE_TEMPLATE_SETTINGS", "SIDEBAR.ENABLE-PLANS", "ANALYTICS_AND_REPORTS.REVENUE_DATA", "SIDEBAR.ENABLE-RICH-CONTENT", "META_SITE.DUPLICATE_FROM_ANOTHER_ACCOUNT", "wix-events.manage-own-events", "premium.PlansPurchasePageControllers.verifyPlansDoublePurchase", "ALBUMS.MANAGE", "premium.assignPackageToSite", "WIX_MULTILINGUAL.MACHINE_TRANSLATE", "SIDEBAR.ENABLE_RESTAURANTS_ORDERS_PREP_BOARD", "PROMOTE_GBP_FEATURE.FEATURES_READ", "premium.StoreMailboxPackagePickerService.getPackagePickerPricing", "WIX-FORUM.FORUM-REORDER-CATEGORIES", "SIDEBAR.VIEW-CHALLANGES", "BUSINESS_MANAGER.VIEW_PROPOSALS_PAGE", "BILLING.BUSINESS_BILLING_SETTINGS_MANAGE", "ECOM.MODIFY_CHECKOUTS", "BLOCKS.VIEW_APPS", "WIX_EVENTS.READ_TICKET_GUEST_FORM", "premium.MsnStoreServices.getDetailsForExistingPackage", "CHECKOUT_REQUIREMENTS.RULES_DELETE", "QUIZZES.SUBMISSION_READ_ANY", "REVERSE_PROXY.ROUTE_READ", "premium.MailboxSubscriptionService.getSubscriptions", "RESTAURANTS.SECTION_READ", "PAYMENTS.DISPUTE_CASES_GENERATE_EVIDENCE_UPLOAD_URL", "POS.CHECKOUT_BOOKINGS", "IAM.DELETE_IDENTITY", "WIX_EDUCATION.IS_EDUCATION_USER", "PROMOTE.PAID_ADS_READ_ELIGIBILITY_INFO", "EDITOR.CONCURRENT_WATCHER_REPORT", "account-manager.view-hire-a-partner-on-sidebar", "ECOM.CREATE_CHECKOUT_FROM_CART", "WIX_STORES.READ_HIDDEN_SUBSCRIPTION_OPTIONS", "SIDEBAR.ENABLE_COMMUNITY", "WIX_HOTELS.VIEW_ROOM_TYPE", "EDITOR.SITE_EMBED_CREATE", "WIXSTUDIO.TEMPLATE_SITE_CREATE", "PROMOTE.GOOGLE_ADS_ACCOUNT_UPDATE", "premium.PlansRefundApi.getPlanBySbsServiceId", "OAUTH.CREATE_USER_TOKENS", "VELO.PUBLISH_PACKAGE", "ECOM.READ_ORDERS", "PROMOTE.MULTICHANNEL_CAMPAIGN_UPDATE", "BOOKINGS.IGNORE_BOOKING_POLICY", "ECOM.ADMIN_VIEW_ELIGIBLE_MEMBERSHIPS", "premium.PremiumDashboardFacade.getSitesPackages", "PARTNERS.PARTNER_QUALITY_READ", "RESTAURANTS.MODIFIER_UPDATE", "WIX_DATA.IS_REFERENCED", "premium.markAsUsed", "SITE_ROLES.CHANGE_ROLE", "premium.PlansPurchasePageControllers.createPlansOrderPage", "my-account.view-bookings-calendar", "BOOKINGS.RESCHEDULE_BOOKING", "ECOM.DISCOUNT_RULES_UPDATE", "WIX_STORES.STORES_LOCATION_GET_OR_CREATE", "DOCUMENT.UPDATE_THEME", "ANALYTICS_AND_REPORTS.INSIGHTS_READ", "premium.TransferSiteToMsnApi.changePackageOwnership", "PREMIUM.TEST_CAN_CANCEL", "MY_ACCOUNT.BULK_MOVE_SITES_TO_TRASH", "WIX-MUSIC.MANAGE-LIBRARY", "POS.POS_SHOP_ORDERS_QUERY", "SIDEBAR.ENABLE-MOBILE-APP-SETTINGS", "WIX_QUOTES.GET_INVOICE", "premium.MailboxPurchasePageControllers.loadMailboxPurchasePageV2", "PAYMENTS.CHARGE_VOID", "premium.PPPlansCmsManager.getPlansTotalPrice", "LOYALTY.READ_REWARDS", "WIX_MULTILINGUAL.MANAGE_EDITOR_MAPPER", "BOOKINGS.PRICE_PREVIEW", "PAYMENT_LINKS.PAYMENT_LINK_READ", "PROPOSALS.PROPOSAL_PUBLISH_FROM_TEMPLATE", "PREFERRED_APPS.WRITE", "MARKETPLACE_ACTION.ACCOUNT_CREATE", "SIDEBAR.ENABLE-INTEGRATIONS", "QUIZZES.DELETE_SUBMISSION", "BENEFIT_PROGRAMS.PROGRAM_PROVISION", "SIDEBAR.ENABLE-PROMOTE-HOME", "LIVE_VIDEO.JOIN_SESSIONS", "PREMIUM_MANAGEMENT-PAYMENT.METHODS-DELETE", "BENEFIT_PROGRAMS.POOL_RENEW", "premium.PremiumUserHighPriorityNotifier.notifyOnNearRenew", "PREMIUM.LIST_USER_PERMITTED_PREMIUM_ASSETS", "WIX_EVENTS.MANAGE_RSVP", "SIDEBAR.ENABLE-MANAGE-BOOKINGS-STAFF", "WIX_DATA.GET", "art-store.modify-store", "premium.PremiumMsnRpc.didDomainEverHadGoogleMailPackage", "CALENDAR.EVENT_UPDATE", "ECOM.DRAFT_ORDER_UPDATE_EXTENDED_FIELDS", "EDITORX.GRANT_PAGE_EDIT", "INBOX_CHANNELS.VIEW_FACEBOOK_SUBSCRIPTIONS", "SIDEBAR.ENABLE-SEO-TOOLS", "secrets-vault.update-secret", "PAYMENTS.REFUND_UPDATE", "ECOM.SHIPPING_OPTION_CREATE", "META_SITE_PROVISION.CHANGE_TEMPLATE", "DEV_CENTER.GET_APP_CONTRIBUTORS", "POS.CUSTOMERS-VIEW-AND-CREATE", "SIDEBAR.ENABLE_PARTNER_SETTINGS", "WIX_EMAILS.SENDING_DOMAIN_CREATE", "WIX_QUOTES.PREVIEW_INVOICE", "WIX_MULTILINGUAL.CONTENT_UPDATE", "WIX_RESTAURANTS.FULFILLMENT_METHODS_WRITE", "SIDEBAR.VIEW-VIDEO-MAKER", "premium.VoucherProductApi.defineVouchersFor", "ACTIVITY_LOGS.SITE_ACTIVITY_LOG_READ", "BLOG.READ_ANY_DRAFT", "site-users.view-users", "VELO.APP_PROVISION", "WIX_EDUCATION.TEST_SITE_LEVEL_WITH_METASITE", "PREMIUM.VIEW_BILLING_HISTORY", "STAFF_MEMBERS.STAFF_MEMBER_READ", "paid-plans.manage", "BUSINESS_MANAGER.CRM_CONTACTS.PURCHASE_STATS_WIDGET", "premium.UserPremiumAssetsService.listUserPremiumAssetsOffline", "premium.PremiumMsnServices.getAllMsnUsers", "BOOKINGS.PRICE_CALCULATE", "premium.PremiumUserAlerts.getAccountAlerts", "my-account.view-restaurants-analytics", "WIX_STORES.READ_PRODUCTS", "premium.TransferSiteMyAccountApi.getTransferInfo", "SIDEBAR.VIEW_WEBSITE_PAGE", "PARTNERS.MARKETPLACE_PROVIDER_STATE_READ", "premium.PremiumUserManager.assignPlanToSite", "SIDEBAR.VIEW-FORMS", "SIDEBAR.VIEW-INVOICES", "my-account.update-tag", "bookings.read", "WIX_STORES.VARIANTS_READ", "SMS_PROVIDER.DELETE_BRAND", "BOOKINGS.RESOURCE_CHECK_AVAILABILITY", "ACCOUNT_AUTH_SETTINGS.CREATE_SETTINGS", "MetaSite.Create", "SIDEBAR.VIEW-DATABASES", "BLOG.TOGGLE-FEATURED-POST", "WIX_HOTELS.VIEW_SALES_DEPARTMENT", "ANALYTICS_AND_REPORTS.VIEW_RECENTLY_VIEWED", "PROMOTE.MULTICHANNEL_CAMPAIGN_UPDATE_ACTIVITY", "VELO.NPM_REQUESTS_READ", "WIX_DATA.LIST_SCHEMAS", "badges.manage", "premium.MsnMailerClient.getNoActiveBillingAccountEmail", "premium.allowInjectRenewalCoupon", "WIX_ATLAS.SEARCH", "SIDEBAR.VIEW-MUSIC-SITE-TRAFFIC", "BILLING.TAX_SETTINGS_CREATE", "APP_MARKET.UNINSTALL_APPS", "REVIEWS.REMOVE_REPLY", "SIDEBAR.VIEW_RESTAURANTS_RESERVATION_GATE", "premium.assets.connectDisconnectToSite", "DEV_CENTER.TEST_APP_RESOURCE_TYPE", "premium.VouchersBoApi.allocateTpaVoucher", "ECOM.READ_CHECKOUTS", "CONTACTS_ATTACHMENTS.MODIFY", "PRICING_PLANS.AUTOMATIONS", "WIX_FORUM.POST_EDIT", "PARTNERS.PROPOSALS_UPDATE_SETTINGS", "BILLING.TAX_GROUP_UPDATE", "premium.PremiumDashboardFacade.getSitePackage", "SIDEBAR.ENABLE-COUPONS", "BLOG.DELETE-DRAFT", "PARTNERS.SHOW_BILLING_WIDGET", "RESTAURANTS.DISPLAY_SETTINGS_READ", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_CANCEL", "EDITOR.DEPLOYMENT_CREATE", "premium.VouchersBoApi.getVouchers", "BOOKINGS.SERVICES_COUNT", "STUDIO.VIEW_MARKETPLACE_PAGE", "DOMAINS.READ_CONNECTED_DOMAINS", "SIDEBAR.VIEW_RESTAURANTS_MENUS_GATE", "premium.PremiumStoreApi.getFormattingSettingsForAllCurrencies", "IAM.CONNECTION_CONFIG_CREATE", "PAYMENTS.UPLOAD_EVIDENCE", "SIDEBAR.VIEW_FILE_SHARE", "IAM.CONNECTION_CONFIG_READ_ENABLED", "WIX_DATA.REMOVE_SCHEMAS_SNAPSHOT", "BOOKINGS.BOOKING_POLICY_DELETE", "WIX_STORES.BRANDS_READ", "premium.DigitalGoodsBoApi.updateSku", "ECOM.ADMIN_CALCULATE_TOTALS", "FILE_SHARE.MEMBERS_READ_WRITE", "EDITOR.SITE_EMBED_DELETE", "CHALLENGE_MANAGE.DELETE_SECTION", "premium.validTldAndVoucherCount", "WIX_EVENTS.READ_TICKETS", "premium.notifications.billing", "WIX-GROUPS.DELETE_MEMBER", "ECOM.SEND_ORDER_MAIL", "RESTAURANTS.MODIFIER_DELETE", "RESTAURANTS.ITEM_UPDATE", "premium.GoogleMailboxesEmailSender.getNoActiveBillingAccountEmail", "art-store.manage", "wix-code.google-project-viewer", "WIX_RESTAURANTS.FULFILLMENT_METHODS_READ", "EDITORX.NEW_COMMENT", "SITE_BRANCHES.LIST_BRANCHES", "WIX_STORES.INVENTORY_DELETE", "BENEFIT_PROGRAMS.POOL_DEFINITION_UPDATE", "DOCUMENT.ADD_COMPONENTS", "WIX-MUSIC.VIEW-LIBRARY", "EDITOR.MODIFY_SEO", "BRANDED_APPS.GET_BUILD_STATUS", "SIDEBAR.VIEW-STORES-ABANDONED-CARTS", "ECOM.ADJUSTMENT_UPDATE", "SIDEBAR.ENABLE-VIDEO-MAKER", "PAYMENTS.CHARGE_CAPTURE", "CALENDAR.EVENT_UPDATE_OWN", "IAM.CONNECTION_READ", "DOCUMENT.EDIT_SPECIFIC_PAGES", "ONLINE_PROGRAMS.PARTICIPANT_ISSUE_CERTIFICATE", "ECOM.DRAFT_ORDERS_ADD_DISCOUNTS", "WIX_STORES.PRODUCT_READ_NON_VISIBLE", "premium.PremiumMsnServices.filterDomainsThatEverHadAPackage", "LOYALTY.READ_TRANSACTIONS", "IAM.CONNECTION_CONFIG_DELETE", "ECOM.READ_CHECKOUT_SETTINGS", "PAYMENTS.ACCOUNT_UPDATE", "BOOKINGS.CATALOG_ROLLOUT_STATUS_READ", "SITE_LIST.READ", "WIX_STORES.RIBBON_GET_OR_CREATE", "WIX_DATA.DRIVER_COUNT_ITEMS", "premium.PlansManagementApi.cancelService", "PREMIUM.CHECKOUT-SERVER-API-GET-SUMMARY", "DINERS.UPDATE_RESTAURANT", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETNEARRENEWALRECOMMENDEDTOSTARTERMAIL", "PROMOTE.PUBLISHER_ITEM_UPDATE", "DOMAINS.MANAGE_DOMAIN_REGISTRATIONS", "RESTAURANTS.MENU_UPDATE", "API_KEYS.CREATE", "account-manager.view-team-on-sidebar", "FILE_SHARE.READ", "MEMBERS.RESET_PASSWORD", "SIDEBAR.VIEW_RESTAURANTS_ORDERS_PREP_BOARD", "subscriptions.manage", "WIX-GROUPS.ASSIGN_MEMBER", "VELO.HAS_CODE_DIFF", "SIDEBAR.ENABLE-BLOG-TAGS", "html-editor.delete", "SEATING.READ_PLAN", "AUTOCMS.FOLDER_MOVE", "PAYMENTS.DISPUTE_CASES_ATTACH_UPLOADED_EVIDENCE_DOCUMENT", "premium.GoogleMailboxesEmailSender.getInitialPurchasePackageEmail", "SIDEBAR.ENABLE_RESTAURANTS_MENUS_GATE", "bookings.manage-settings", "IDENTITY.SITE_CONTRIBUTOR", "WIX_RESTAURANTS.READ_CATALOGS", "currency-converter.read-site-currencies", "SIDEBAR.VIEW-SEO-PATTERNS", "premium.DomainsPurchasePageController.domainPurchasePage", "DOCUMENT.REMOVE_COMPONENTS", "PARTNERS.TEMPLATE_DOWNLOAD_SHAREABLE_FILE", "CC_TICKETS.VIEW_ALL_TICKETS", "CALENDAR.PARTICIPATION_CREATE", "ECOM.GET_PAYMENT_SETTINGS", "BENEFIT_PROGRAMS.POOL_DEFINITION_DELETE", "RESTAURANTS.AVAILABILITY_EXCEPTION_DELETE", "SIDEBAR.ENABLE_TIPS_PERMISSION", "premium.DigitalGoodsCustomerApi.getSku", "premium.RefundEmailSender.getRequestCreatedEmail", "LIVE_VIDEO.MANAGE_VIDEO_STREAM", "SIDEBAR.ENABLE_TIKTOK_CATALOG", "PROMOTE.MULTICHANNEL_CAMPAIGN_ADD_ACTIVITY", "VELO.DATABASE_DEPLOYMENT_CREATE", "WIX-FORUM.CATEGORY-READ", "LOGO_MAKER.VIEW_MY_LOGOS", "WIX_DATA.BULK_GET_COLLECTIONS", "INBOX.READ_MESSAGES", "WIX_EVENTS.CREATE_RSVP", "premium.PlansBoApi.copyPlanFeatures", "FAQ.PROVISION_READ", "BOOKINGS.SCHEDULE_BUFFER_TIME_READ", "WIX_EVENTS.READ_TICKET_DEFINITIONS_DASHBOARD", "RESTAURANTS.SECTION_UPDATE", "BENEFIT_PROGRAMS.TRANSACTION_READ", "WIX_DATA.DRIVER_REMOVE_ITEM", "ANALYTICS_AND_REPORTS.RENAME_SITE_REPORT", "premium.PlansPackagePickerControllers.UnassignPlan", "SMS_PROVIDER.SEND_SMS", "premium.PlansPurchasePageControllers.getPremiumPlanPurchaseOrderPageData.siteLevel", "CHAT.INSTALL_WIX_CHAT", "WIX_DATA.DELETE_EXTERNAL_DATABASE_CONNECTION", "PREMIUM.RESELLER_MANAGEMENT_GET_EXTERNAL_REDIRECT_URLS", "premium.FailedInvoice.failedInvoiceRetry", "premium.WixDealerService.getBannerIdForApp", "COOKIE_CONSENT.UPDATE_BANNER", "WIX_EVENTS.READ_RSVP_FORM", "premium.PlansFeaturesControllers.getAllFeatures", "my-account.delete-tag", "premium.PlansBoApi.updateAllowAcceptPayments", "SIDEBAR.ENABLE_BOOKINGS_LIST", "CONTACTS_FILTERS.VIEW", "account-manager.view-domains-on-sidebar", "wix-stores.modify-subscriptions", "WIX_DONATIONS.CAMPAIGNS_MODIFY", "PREMIUM.BILLINGMANAGERTEAM", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETWORKSPACEPRICEINCREASEEMAIL", "CALENDAR.PARTICIPATION_DELETE", "VELO.GRID_APP_CODE_PAGE_READ", "VELO.PAGE_IMPORTED_NAMESPACES_READ", "premium.PlansManagementApi.setAutoRenewOff", "premium.isWixNameServers", "METASITE.UPDATE", "ECOM.DRAFT_ORDERS_SET_ADDITIONAL_FEES", "paid-plans.view-paid-plans", "WIX_STORES.CUSTOMIZATION_READ", "SIDEBAR.VIEW-VIDEO", "premium.PlansPurchasePageControllers.renderPlansDirectPurchasePage", "MEDIA.ENTERPRISE_MEDIA_CATEGORIES_CREATE", "POS.LAYOUT_SETTING_MANAGE", "IAM.UPDATE_IDENTITY_RE_ENROLL_CONNECTION", "premium.injectRenewalCoupon", "premium.purchase-site-plans", "BAZAAR.PRODUCT_READ", "PROMOTE.PUBLISHER_USER_READ", "my-account.view-hotels", "PREMIUM.GET_PLAN_DOWNGRADE_BILLING_CYCLE_CHANGE_REQUEST_EMAIL", "WIX_DATA.DRIVER_INSERT_REFERENCES", "SMS_PROVIDER.SMS_ACCOUNT_READ", "LOGO_MAKER.DETACH_SITE", "MEMBERS.CHANGE_LOGIN_EMAIL", "RESTAURANTS.MENU_GET", "premium.GoogleMailboxesDashboardApi.getMailboxInfoByUser", "site-settings.view", "PING.ALL_CONTRIBUTORS_NOTIFICATIONS_RECEIVE", "RESOURCES.RESOURCE_LIST_FREE_TIME", "CHANNELS.CUSTOM_TEMPLATES_CREATE", "TAGS.TAG_UPDATE", "MOBILE_APP.MANAGE", "WIX_STORES.MARKETPLACE_SETTINGS_DELETE", "BLOG.EDIT-BLOG", "CONTACTS_SEGMENTS.DELETE", "premium.PlansBoUserManager.getUserPremiumInfo", "premium.GoogleMailboxesDashboardApi.getMailboxInfoByDomains", "PORTFOLIO.PROJECT_CREATE", "VELO.DATABASE_DEPLOYMENT_DELETE", "RESTAURANTS.MENU_DELETE", "BLOG.READ_SEO", "DOCUMENT.EDIT_ALT_TXT", "Account.DeleteAccount", "WIX_DATA.DATA_JOB_TERMINATE", "SIDEBAR.VIEW-INSTAGRAM-CHANNEL", "SMS_PROVIDER.CREATE_BRAND", "CHALLENGE-PARTICIPATE.FIND-APPROVAL", "WIX_FORUM.READ_SUBSCRIPTIONS", "BOOKINGS.CONFERENCE_ACCOUNT_READ", "CALENDAR.EVENT_CREATE", "WIX_FORMS.FORM_SPAM_SUBMISSION_REPORT_REPORT_NOT_SPAM", "PAYMENTS.SUBMIT_DISPUTE", "bookings.can-broadcast", "ENTERPRISE.CUSTOM_TEMPLATES_CREATE", "DOMAINS.READ_DOMAIN_ASSIGNMENTS", "SIDEBAR.VIEW_BLOG_MY_PROFILE", "WIX_FORUM.POST_DELETE_ALL", "EMAIL_SUBSCRIPTIONS.MODIFY", "SIDEBAR.ENABLE_MARKETPLACE_PROFILE", "ONLINE_PROGRAMS.STEP_READ", "REVIEWS.DELETE_CONFIGURATION", "PROMOTE.PUBLISHER_ACCOUNT_READ", "WIX_QUOTES.VERIFY_INVOICE", "BILLING.TAX_GROUP_MAPPING_DELETE", "site-actions.transfer-site", "MEDIA.GET_RECOMMENDED_MEDIA_UNPLATFORMIZE", "premium.PlansBillingAndPaymentsApi.getVerticalTpaSkusf", "TABLE_RESERVATIONS.RESERVATION_READ_FULL", "WIX_RESTAURANTS.READ_INSTANCE_MAPPING", "HTML_EDITOR.GET_SITE_REVISIONS_INFO", "BILLING.TAX_CALCULATORS_READ", "SIDEBAR.VIEW-INBOX", "BUSINESS_MANAGER.ENABLE_CHECKOUT_REQUIREMENTS", "WIX_SEO.CONNECT_SITES_READ", "CHALLENGE-PARTICIPATE.FIND-PARTICIPANT", "CATEGORIES.CATEGORY_READ", "PARTNERS.PROPOSALS_CREATE_SETTINGS", "BRANDED_APPS.LIFECYCLE_CREATE", "EDITORX.INSPECTOR_TAB_CONTENT", "ECOM.ORDER_MODIFY_PRIVATE_TAGS", "WIXSTUDIO.TEMPLATE_DELETE", "OTT.BULK_TOKEN_CREATE", "WIX_FORUM.POST_REMOVE_REACTION", "ONLINE_PROGRAMS.CATEGORY_READ", "WIX_PARTNERS.GENERALBENEFITS", "USERS.UPDATE_PASSWORD", "DOCUMENT.READ_COMPONENTS", "INBOX_CHANNELS.VIEW_WHATSAPP_SUBSCRIPTIONS", "RECOMMENDATIONS.READ", "PARTNERS.MARKETPLACE_CLIENT_UPDATE", "CATEGORIES.CATEGORY_CREATE", "ENTERPRISE.AUDIT_LOG_READ", "SIDEBAR.VIEW_REVIEWS", "my-account.enable-notification-settings", "MEMBERS_AREA.MANAGE_RESOURCE_APP_DATA", "SCIM.SCIM_SETTINGS_READ", "WIX_STORES.VARIANT_READ_USER_DATA", "EDITORX.SECURITY_RULE", "SIDEBAR.VIEW_SALESCHANNELSHOME", "Account.GetUserAccountProperties", "BADGES.BADGE_DELETE", "ACCOUNT_MANAGER.VIEW_PARTNERS_PACKAGE_ON_SIDEBAR", "BANKING.ENTRY_POINT_READ", "WIX_RESTAURANTS.READ_MENUS", "WIX_RESTAURANTS.OPERATE_PERMISSION", "BRANDED_APPS.READ_SECRETS_GROUPS", "app-market.upgrade-app", "FILE_SHARING.MEMBERS_READ_WRITE", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.UNASSIGN_PLAN", "BOOKINGS.LOCK_DELETE", "WIX_STORES.INVENTORY_UPDATE", "SIDEBAR.ENABLE-INKFROG-CHANNEL", "VIRTUAL_NUMBERS.COMMUNICATE", "WIX_COMMENTS.COMMENT_MODERATE_DRAFT_CONTENT", "WIX_FORUM.POST_CREATE_COMMENT", "WIX_FORMS.FORM_SCHEMA_DELETE", "recurring-invoices.view", "SIDEBAR.VIEW-BOOKINGS-SERVICES", "html-editor.edit", "RESTAURANTS.MENU_READ", "BADGES.BADGE_READ", "RESTAURANTS.ITEM_GET", "DOMAINS.READ_DNS_ZONES", "ACCOUNT_AUTH_SETTINGS.DELETE_SETTINGS", "ANALYTICS_AND_REPORTS.EVENTS_READ", "WIX_HOTELS.VIEW_EMAIL_TEMPLATES", "CHECKOUT_REQUIREMENTS.RULES_UPDATE", "onboarding.view-revisions", "PORTFOLIO.PROJECT_ITEM_UPDATE", "SCIM.USER_UPDATE", "premium.MsnMailerClient.getUserInitiatedCancellationEmail", "WIX_STORES.CHANNELS_PRODUCT_GATEWAY_SYNC_STATUS", "CHALLENGE-MANAGE.CLONE-CHALLENGE", "premium.PremiumUserManager.hasActivePremiumPackage", "POS.AGGREGATE_NO_SALE_REPORT_READ", "TABLE_RESERVATIONS.RESERVATION_READ", "WIX_STORES.READ_HIDDEN_PRODUCTS", "SIDEBAR.VIEW-RESTAURANTS-ORDERS-SETTINGS", "premium.PremiumVouchersV2.markAsUsed", "SIDEBAR.ENABLE-PHOTO-ALBUMS", "DEV_CENTER.MANAGE_COMPONENTS", "TABLE_RESERVATIONS.RESERVATION_SET_STATUS", "SIDEBAR.ENABLE-MANAGE-PLANS", "premium.VoucherProductApi.clearVoucherDefinitionFor", "AUTOCMS.TASK_EDIT_FIELD_DATA", "PARTNERS.MARKETPLACE_CLIENT_READ", "SIDEBAR.VIEW-MARKETINGS-INTEGRATIONS", "SIDEBAR.ENABLE-RESTAURANTS-MENUS", "ACCOUNT_AUTH_SETTINGS.ADD_FEDERATED_METHOD", "WIX_STORES.MODIFY_INVENTORY", "WIX_DATA.GET_SIGNED_INSTANCE_AS_CONTRIBUTOR", "WIX_FORMS.SPAM_SUBMISSION_DELETE", "blog.edit", "SIDEBAR.ENABLE-BLOG-PUBLISHED", "ANYWHERE.THEME_OVERRIDE_PUBLISH", "BOOKINGS.SERVICE_CLONE", "SIDEBAR.ENABLE-OLD-BLOG", "BLOG.DELETE_ANY_POST_COMMENTS", "WIX_STORES.READ_LOCATION_INVENTORY", "CONFERENCING.READ_CONFERENCES", "premium.CmsBackOfficeServerRpc.testCms", "WIX_STORES.READ_LOCAL_DELIVERY_OPTIONS", "APP_MARKET.UPDATE_APP", "WIXSTUDIO.CLIENT_KIT_RESOURCE_DELETE", "AUTOMATIONS.AUTOMATION_READ", "PARTNERS.PROPOSALS_TEMPLATES_READ", "ENTITLEMENTS.BALANCE_READ", "PREMIUM.GET_PLAN_DOWNGRADE_BILLING_CYCLE_EMAIL", "GOOGLE_MAILBOX_MANAGEMENT_API.GET_USER_MAILBOXES", "SIDEBAR.VIEW_MARKETPLACE_LEADS", "DOMAINS.MANAGE_DNS_ZONES", "calendar.manage-schedules", "QUESTIONS.DELETE", "POS.SETTINGS_READ", "WIX_FORUM.POST_TOGGLE_COMMENTS", "WIX_EVENTS.READ_ONLINE_CONFERENCING", "CALENDAR.MANAGE_OWN_SCHEDULES", "PROMOTE.SENDER_DETAILS_DELETE", "PAYMENTS.DISPUTE_CASES_CLEAR_EVIDENCE_DOCUMENT", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.SUBSCRIPTIONS_LIST", "PROMOTE.MULTICHANNEL_CAMPAIGN_REMOVE_ACTIVITY", "API_KEYS.ROTATE", "VELO.WIX_IDE_EDIT", "MEMBERS.MEMBER_UPDATE_FULL_SET", "BILLING.TAX_GROUP_READ", "WIX_FORUM.POST_ADD_REACTION", "WIX_FORUM.POST_REPORT", "premium.PremiumUserManager.getUserTpaPackages", "WIX_DATA.DB_TASK_GET", "BOOKINGS.CAN_BROADCAST", "PORTFOLIO.COLLECTION_READ", "ECOM.DRAFT_ORDERS_ADD_LINE_ITEMS", "SMS_PROVIDER.AVAILABLE_NUMBERS_READ", "WIX_STORES.MODIFY_MARKETPLACES_DATA", "SEATING.MANAGE_PLANS", "RESOURCES.RESOURCE_LIST_RESOURCES_AVAILABILITY", "WIX-FORUM.POST-REMOVE-BEST-ANSWER-COMMENT-ALL", "my-account.view-shoutout", "premium.PremiumStoreApi.getProductPrices", "WIX_NFT.SETTINGS_MODIFY", "CORVID.RELEASE-MANAGER-ADMIN", "WIX_CHAT.SETTINGS", "SITES.DUPLICATE", "premium.RefundEmailSender.getDeniedRefundEmail", "SIDEBAR.ENABLE-CONTACT", "premium.MsnMailerClient.getSubscriptionChargeFailureEmail", "RELEASE_MANAGER.UPDATE_REVISIONS_EXPOSURE", "premium.InternalConnectDomainApi.isDomainReolved", "WIX_RESTAURANTS.READ_ORDERS", "PREMIUM.BUSINESS_SITE_TRANSFER", "COOKIE-CONSENT.READ", "DOCUMENT.ADVANCED_SITE_SETTINGS", "ECOM.DRAFT_ORDERS_SET_DISCOUNTS", "WIX_FORUM.POST_MARK_SEEN", "WIX_COMMENTS.COMMENT_DELETE", "BUSINESS_MANAGER.ENABLE_HOPP", "SIDEBAR.VIEW-SETTINGS-LOBBY", "BRANDED_APPS.LIFECYCLE_CREATE_APP_STORE_SECRETS", "SIDEBAR.ENABLE-RESTAURANTS-ANALYTICS", "SIDEBAR.ENABLE-SEO-SETTINGS", "WIX_EVENTS.READ_INVOICE", "my-account.open-dashboard", "DOCUMENT.EDIT_STRUCTURE", "ITEMS_SELECTION.LIST_ITEMS", "WIX-FORUM.POST-ADD-BEST-ANSWER-COMMENT", "premium.WixDealerService.getPremiumPlansPackagePickerData", "SIDEBAR.VIEW_MARKETPLACE_PROFILE", "SIDEBAR.ENABLE-SETTINGS-OVERVIEW", "SALESFORCE.INTEGRATION_READ", "PAYMENTS.DISPUTES_ADD_EVIDENCE", "premium.purchaseDomain", "PAYMENTS.REFUND_READ", "IAM.OIDC_CONFIG_UPDATE", "SIDEBAR.VIEW-INTEGRATIONS", "PREMIUM.ASSETS_RECOLLECT_ACCOUNT", "DOMAINS.PUBLIC_API_PERMISSION", "PARTNERS.PARTNERS_PROGRAM_READ", "SIDEBAR.VIEW_PLATFORM_VISIBILITY", "SIDEBAR.ENABLE-PARTNERS-RESOURCES", "premium.PlansManagementApi.unassignPackageToSite", "WIX_CHAT.PCF_SETTINGS", "paid-plans.manage-benefits-transactions", "WIX_PARTNERS.SET_MARKETPLACE_CRM", "CRM_NOTES.NOTE_READ", "premium.AppMarketTempApi.addSbsProductAndTpaSkuNew", "VELO.CALCULATE_ELIGIBILITY_DEV", "MEMBERS.SANTA_MEMBERS_MY_MEMBER_PAGE_READ", "SIDEBAR.VIEW_SETTLEMENT_REPORT", "CALENDAR.MANAGE_OWN_SESSIONS", "blog-importer.manage", "premium.PremiumGoogleMailBoxService.getGoogleAppWixUsers", "BOOKINGS.CONFERENCE_ACCOUNT_CREATE_CONFERENCE", "APP_MARKET.DELETE_APP", "my-account.update-contact", "SIDEBAR.VIEW-CONTACT-LIST", "REVERSE_PROXY.ROUTE_DELETE", "PROPOSALS.PROPOSAL_SUBMIT_DOCUMENT", "WIX_FORUM.MOBILE_SETTINGS_EDIT", "VELO.SINK_CREATE", "WIX_DATA.SHARED_DATA_COLLECTION_GET_POLICY", "PREMIUM.UPDATE_BILLING_CYCLE", "RESTAURANTS.MENU_EXTRACTIONS_CREATE", "WIX_FORUM.POST_ADD_BEST_ANSWER_COMMENT", "premium.PremiumPlanPackagePickerManager.getPackagePickersDetails", "WIX_CHAT.READ_MESSAGES", "my-account.view-site-members", "BLOG.READ-PUBLICATION", "WIX_EVENTS.MANAGE", "CHECKOUT_REQUIREMENTS.MODIFY_RULES", "ECOM.DISCOUNT_RULES_READ", "ECOM.MODIFY_BACK_IN_STOCK_NOTIFICATION_REQUESTS", "paid-plans.list-member-purchases", "REVIEWS.READ_REVIEWS", "premium.ChangePlanControllers.getChangePlanDetails", "SIDEBAR.ENABLE-SHOUTOUT", "app-store.provision", "AUTOCMS.FOLDER_CREATE", "DOCUMENT.EDIT_CONTENT", "BILLING.TAX_REGION_DELETE", "IDENTITY.GROUP_SUBJECT_DELETE", "SIDEBAR.VIEW_SHARED_GALLERY", "BOOKINGS.BOOKING_POLICY_READ", "CHANNELS.EDIT_BUSINESS_INFO_PAGE", "MEMBERS.CUSTOM_FIELDS_CREATE", "WIX_FLOWS.PAGE_CONTENT_READ", "premium.MsnStoreServices.isAddressValid", "premium.MsnStoreServices.getSkuOrThrow", "WIX_DATA.UPDATE_EXTERNAL_DATABASE_CONNECTION", "premium.PlansBoUserManager.getUserTpas", "INNOVATION_LAB.CHAT_WIDGET", "CHALLENGE-PARTICIPATE.LEAVE-CHALLENGE", "WIX_MULTILINGUAL.GET_IS_ELIGIBLE", "app-settings.manage", "my-account.enable-purchased-plans", "site-users.remove-user", "wix-code.admin", "ACCOUNT_AUTH_SETTINGS.UPDATE_SETTINGS", "RESTAURANTS.FULFILLMENT_METHOD_READ", "premium.PageScreenshotRpc.migrateExistingBanners", "WIX_DATA.GET_CONTEXT", "SIDEBAR.VIEW-DOMAINS", "premium.list", "CATEGORIES.CATEGORY_MOVE", "MEDIA.SITE_MEDIA_FOLDERS_DOWNLOAD", "REVIEWS_SPI.READ_PRODUCTS", "ONLINE_PROGRAMS.PARTICIPANT_JOIN", "PREMIUM.CHANGE_PLAN", "WIX_STORES.ALGORITHM_ACTIVATE", "SIDEBAR.ENABLE-NOTIFICATION-SETTINGS", "SIDEBAR.ENABLE-AUTOMATIONS", "BI.QUERY_SITE_PROFILE", "WIX-FORUM.CATEGORY-DELETE", "wix-analytics.view", "EDITOR.QUERY_PROTECTED_PAGES", "WIX_STORES.STORES_LOCATION_READ", "premium.PlansPackagePickerControllers.changePlan", "PROMOTE.WEB_SCRAPER_EXTRACT", "LOCATIONS.READ", "WIX_EVENTS.READ_AGENDA_BOOKMARKS", "OAUTH_APP.APP_DELETE", "shoutout.read", "BRANDED_APPS.WRITE_BUILD_SECRETS", "SIDEBAR.VIEW-DASHBOARD", "premium.GoogleMailboxToBoApi.getSubscriptionUsers", "SCIM.GROUP_CREATE", "RATING.DEFINITION_CREATE", "team.send-invite", "IDENTITY.GROUP_CREATE", "premium.PlansDashboardApi.getSitePackage", "AUTOCMS.READ_CURRENT_PRODUCTS_DATA", "SIDEBAR.ENABLE-PURCHASED-PLANS", "CRM_TASKS.TASK_DELETE", "BLOG.MANAGE_BLOG_AUTHORS", "WIX_STORES.INFO_SECTIONS_DELETE", "POS.TIME_CARDS_CREATE", "IAM.BLOCK_IDENTITY", "RECURRING_INVOICES.VIEW", "premium.WixDealerController.salesSystemResolver", "ECOM.MODIFY_PAYMENTS", "my-account.view-tasks", "PARTNERS.TEMPLATE_PURCHASE_READ_COUNTS", "CATEGORIES.CATEGORY_PLACE_SUBCATEGORY", "my-account.view-restaurants-reservations", "WIX_EVENTS.READ_GUESTS_DETAILS", "WIX_STORES.WISH_TOKEN_STATUS", "PREMIUM.CHARGE_LIMITS.READ", "SIDEBAR.VIEW-SECRETS-MANAGER-SETTINGS", "WIX-GROUPS.EDIT_GROUP", "WIX_DATA.DRIVER_FIND_REFERENCED_ITEMS", "WIX_FLOWS.NEXT_TRANSITION_READ", "shareit-service.later-actions", "news-feed.view", "MOBILE_APP_DASHBOARD.BRANDED_APPS_MANAGE", "WIX_DATA.BULK_UPDATE", "SIDEBAR.VIEW_BOOKINGS_APPS_PAGE", "ACTIVITY_LOGS.SITE_ACTIVITY_READ", "GOOGLE_MAILBOX_MANAGEMENT_API.CHECK_DELIVERY_PROCESS_START", "CALENDAR.LIST_EXTERNAL_CALENDAR_PROVIDERS", "IDENTITY.GROUP_DELETE", "MEDIA.SITE_MEDIA_FOLDERS_MOVE_TO_TRASH", "WIX_DATA.LIST_EXTERNAL_DATABASE_CONNECTIONS", "CHALLENGE-READ.GET-STEP", "BRANDED_APPS.SEND_MARKETING_EMAIL", "BLOG.DELETE-ANY-DRAFT", "REFERRALS.READ_REFERRAL_STATISTICS", "DOCUMENT.DELETE_MASTER", "premium.MsnStoreControllers", "WIX-GROUPS.APPROVE_NEW_MEMBER", "contacts-schema.modify", "WIX_COMMENTS_CONTENT_REVISIONS.LIST_REVISIONS", "BILLING.AVALARA_TAX_RULES_MAPPINGS_READ", "SIDEBAR.VIEW-CONSENT-POLICY-SETTINGS", "RESTAURANTS.FULFILLMENT_METHOD_DELETE", "CATEGORIES.CATEGORY_UPDATE", "WIX_SEO.SITES_READ", "STUDIO.VIEW_CLIENT_KIT", "BENEFIT_PROGRAMS.PROGRAM_DEFINITION_GET_OR_CREATE", "premium.VouchersBoApi.addSupportedSKUsToVisitorAnalytics", "BLOG.READ-CATEGORY", "WIX_STORES.BRANDS_DELETE", "FILE_SHARE.CREATE_FOLDER", "SITES.DELETE", "premium.RefundBackofficeApi.getPendingApprovedRefundRequests", "WIX_DATA.DATA_JOB_GET", "premium.assignToSite", "PRICING_PLANS.CUSTOM_FORM_SUBMISSION_READ", "ANALYTICS_AND_REPORTS.CONTACTS_SEGMENT_STATS_READ", "SEATING_PLANS.READ_RESERVATIONS", "SIDEBAR.ENABLE-BLOG-DRAFTS", "contacts.view", "SIDEBAR.ENABLE-STORES-ORDERS", "premium.SubscriptionsManager.assignToSite", "ECOM.READ_SCOPES", "CHALLENGE_MANAGE.CREATE_SECTION", "SIDEBAR.ENABLE_BLOG_TAGS", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETNEARRENEWALGSUITEMIGEMAIL", "PARTNERS.PROJECT_NOTE_DELETE", "POS.REPORTS-VIEW-CURRENT-DAY", "RATING.DEFINITION_READ", "SCIM.SCIM_SETTINGS_UPDATE", "VELO.IDE_FILES_UPDATE", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.RECOLLECT_AND_FETCH", "WIX_EVENTS.MANAGE_AGENDA_BOOKMARKS", "SIDEBAR.ENABLE_BLOG_PENDING_REVIEW", "SIDEBAR.VIEW-STORES-ANALYTICS", "WIX_NFT.CATALOG_MODIFY", "POS.SEND_RECEIPT", "SIDEBAR.VIEW-PRICE-QUOTES", "CONTACTS_SCHEMA.VIEW", "OAUTH.CREATE_MEMBERS_TOKENS", "VELO.APP_CLONE", "ONLINE_PROGRAMS.CATEGORY_DELETE", "RESTAURANTS.LABEL_READ", "ECOM.MODIFY_ORDERS_PRIVATE_TAGS", "premium.DigitalGoodsBillingAndPaymentsService.sendEmail", "FAQ.DELETE_SITE_CONTENT", "AUTOCMS.TASK_READ", "calendar.manage-own-sessions", "META_SITE_PROVISION.PROVISION", "BLOCKS.MANAGE_APPS", "premium.PaymentsHistoryApi.getPremiumInvoice", "PAYMENTS.TAX_DOCUMENT_READ", "premium.VouchersBoApi.allocateVipVoucher", "BILLING.TAX_REGION_CREATE", "blog-importer.read-own", "MEMBERS.GLOBAL_SETTINGS_WRITE", "ONLINE_PROGRAMS.PROGRAM_CREATE", "DEV_CENTER.WRITE_COMPONENT", "one-app.generate-editor-specs", "premium.PremiumUserManager.canPurgeUser", "WIX_STORES.READ_ORDERS", "BOOKINGS.BOOKING_CREATE", "AUTOMATIONS.GET_STATUS", "VIRTUAL_NUMBERS.BLOCKED_NUMBERS_MANAGE", "wix-stores.read-orders", "premium.PlansManagementApi.autoRenewEnabledForSitePackage", "ONLINE_PROGRAMS.PARTICIPANT_LEAVE", "DISCOVERY.READ", "INBOX_CHANNELS.MANAGE_WHATSAPP_SUBSCRIPTIONS", "GENIE.BUSINESS_INSIGHTS_WRITE", "PROMOTE.FACEBOOK_ADS_CAMPAIGN_UPDATE", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.UPGRADECOMPLETED", "premium.PlansPurchasePageControllers.renderPlansPurchasePage.siteLevel", "SIDEBAR.ENABLE_RESTAURANTS_GATES", "LOGO_MAKER.DELETE_LOGOS", "BLOG.PIN-POST", "GENIE.CONVERSATION_SUMMARY_MANAGE", "CALENDAR.ROLLOUT_STATUS_READ", "cashier.read", "WIX_EDUCATION.DELETE_SITE_MEMBER_BY_ID", "BLOG.CREATE_SEO", "WIX_NFT.SALES_MODIFY", "WIX_RESTAURANTS.READ_POS", "my-account.publish-app", "DEALER.OFFERS_SERVING_SITE_TARGETING", "PARTNERS.MARKETPLACE_PROVIDER_STATE_CREATE", "premium.PlansDealerApi.getPlanProducts", "MEDIA.SITE_MEDIA_FILES_LIST", "SIDEBAR.VIEW-LOGO-MAKER", "MEMBERS.MEMBER_ABOUT_CREATE", "PAPYRUS.READ_TEMPLATE_SETTINGS", "premium.GoogleMailBoxRefundApi.getPurchaseMailBox", "SIDEBAR.ENABLE_BLOG_OVERVIEW", "ANALYTICS_AND_REPORTS.GENERIC_READ", "BLOG.SETTINGS_UPDATE", "META_SITE_SEARCH.FULL_SITE_VIEW", "PAYMENT_LINKS.PAYMENT_LINK_PAY", "premium.PlansPurchasePageControllers.renderUpgradeCyclePurchasePage.siteLevel", "ECOM.SITE_ROLLOUT_STATUS_READ", "my-account.create-contact", "ACCOUNT_ROUTING.ROUTE_CREATE", "PROPOSALS.PROPOSAL_UPDATE", "SIDEBAR.VIEW-BANNERS", "VELO.TEAMWORK_ONBOARDING_DISCONNECT", "premium.connectPlanToSite", "WIX_DATA.GET_COLLECTION", "contacts-labels.modify", "PARTNERS.MARKETPLACE_TEMPLATE_LISTING_UPDATE", "WIX_FORMS.SUBMISSION_READ_ANY", "BENEFIT_PROGRAMS.POOL_DEFINITION_CREATE", "PAYMENT_LINKS.PAYMENT_LINK_SETTINGS_READ", "WIX_ATLAS.LIST_PREDICTIONS", "ANALYTICS_AND_REPORTS.OVERVIEWS_READ", "AUTOCMS.FOLDER_UPDATE", "premium.PremiumMsnServices.deletePackage", "PRICING_PLANS.RECEIVE_ALL_ORDER_NOTIFICATIONS", "ANALYTICS_AND_REPORTS.VIEW_HIGHLIGHTS", "EDITORX.ALLOW_MIGRATION_TO_STUDIO", "SIDEBAR.VIEW-MUSIC-INSIGHTS", "premium.assets.disconnect", "premium.PremiumManagementExternalControllers.userHasUnattachedDomains", "ONEAPP.VIEW_LOGO_MAKER", "AUTOCMS.FOLDER_DELETE_REFERENCE", "challenges.manage", "STAFF_MEMBERS.STAFF_MEMBER_CREATE", "PARTNERS.REV_SHARE_PAYOUT_READ", "WIX_STORES.VARIANTS_DELETE", "premium.MailboxPackagePickerControllers.loadMailBoxPackagePicker", "DOCUMENT.UPDATE_COMPONENTS", "RESTAURANTS.VARIANT_DELETE", "INSTAGRAM_ACCOUNTS.INITIATE_CONNECTION", "ANALYTICS_AND_REPORTS.EMAIL_MARKETING_READ", "WIX_EVENTS.MANAGE_CATEGORIES", "WIX_STORES.STORES_LOCATION_DELETE", "premium.PlansEmailSender.getPlanNearCancellationEmail", "PREMIUM.CHECKOUT-SERVER-API-GET-PAYMENT-SOURCE", "PARTNERS.MARKETPLACE_PROJECT_READ", "SIDEBAR.VIEW-RICH-CONTENT", "PROMOTE.FACEBOOK_ADS_GET_SUGGESTIONS", "ENTERPRISE.MEDIA_UPLOAD", "BRANDED_APPS.LIFECYCLE_SAVE_PUSH_NOTIFICATIONS_CREDENTIALS", "WIX_FORUM.FORUM_REORDER_CATEGORIES", "PORTFOLIO.COLLECTION_DELETE", "premium.viewInvoice", "SCIM.GROUP_UPDATE", "MEMBERS.MEMBER_JOIN_COMMUNITY", "my-account.view-domains", "SIDEBAR.VIEW-WORKFLOWS", "LIVE_VIDEO.MANAGE_RECORDINGS", "ANALYTICS_AND_REPORTS.DELETE_SITE_REPORT", "premium.unAssignPackageFromSite", "WIX_RESTAURANTS.ORDER_PACING_UPDATE", "OPEN_AI_CLIENT.CREATE_IMAGE_ACCOUNT_LEVEL", "BRANDED_APPS.VALIDATE_GOOGLE_CONNECTION", "MEDIA.SITE_MEDIA_FILES_READ", "metasite.list", "premium.GoogleMailboxesDashboardApi.getMailboxInfoByDomain", "PREMIUM.PROVISION_PRODUCTS", "VOTES.UPVOTE", "paid-plans.view-paid-plans-benefits", "premium.getDocPremiumState", "premium.GenericWixPurchasePageControllers.loadPurchasePage", "APP-MARKET.VIEW-INSTALLED-APP", "RESTAURANTS.SECTION_LIST", "ANALYTICS_AND_REPORTS.SET_PUBLIC", "CONFERENCING.READ_ACCOUNT_CONNECTIONS", "premium.PremiumVouchersV2.claimVoucher", "SIDEBAR.VIEW_BLOG_ANALYTICS", "VELO.VALIDATE_PACKAGE_NAME", "ECOM.CATALOG_ITEM_READ", "MEDIA.SITE_MEDIA_FILES_MOVE_TO_TRASH", "premium.PlansPackagePickerControllers.changePlan.siteLevel", "ANALYTICS_AND_REPORTS.ONE_APP_STATS_READ", "addresses.manage", "SIDEBAR.VIEW_RECURRING_INVOICES", "BOOKINGS.BOOKING_MARK_BOOKING_AS_PENDING", "WIX_EVENTS.READ_RSVP", "members.get-members", "SIDEBAR.VIEW-MANAGE-BOOKINGS-STAFF", "AUTOMATIONS.MIGRATION_TRIGGERS_READ", "CALENDAR.MANAGE_SCHEDULES", "SIDEBAR.ENABLE-MARKETINGS-INTEGRATIONS", "my-account.view-stores-abandoned-carts", "onboarding.publish", "RESTAURANTS.SECTION_GET", "GROUPED_BOOKINGS.GROUPED_BOOKINGS_MARK_AS_PENDING", "premium.VouchersBoApi.allocateVouchersForPackageAndAllocationType", "PARTNERS.PARTNERS_PROGRAM_ACHIEVEMENT_DELETE", "CONTACTS_ACTIVITIES.VIEW", "SIDEBAR.ENABLE_ECOM_GIFTCARDS_PERMISSION", "WIX_STORES.MARKETPLACE_PRODUCT_OVERRIDES_CREATE", "BLOG.LIKE-POST", "PAYMENTS.RECURRING_PAYMENTS_VIEW", "MEDIA.GENERATION_OBJECT_ERASER", "VELO.FUNCTIONS_TEST_DISPATCH", "CHAT.MANAGE_CHAT", "premium.GoogleMailboxesEmailSender.getChargeFailureEmail", "WIX_FORMS.SUBMISSION_READ", "ENTERPRISE.CUSTOM_APPS_CREATE", "SIDEBAR.ENABLE-HOTELS", "BILLING.TAX_REGION_READ", "team.change-invite", "BLOG.EDIT-TAG", "CRM.MANAGE_LEADS", "FILE_SHARE.UPLOAD_FILE", "BOOKINGS.MANAGE_RESOURCES", "SIDEBAR.ENABLE-DASHBOARD", "WIX_EVENTS.READ_TICKET_DETAILS", "premium.PremiumMsnServices.setAutoRenewOn", "premium.PlansRefundApi.getPurchaseStandAloneTpas", "WIX_DATA.DRIVER_REPLACE_REFERENCES", "contacts.export", "SIDEBAR.ENABLE_SALESCHANNELSHOME", "premium.PremiumAccountStatusController", "LOYALTY.READ_ACCOUNTS", "PROMOTE.SENDER_EMAILS_READ", "MULTILINGUAL.EXPORT_TRANSLATABLES", "my-account.view-music-insights", "TABLE_RESERVATIONS.GET_INSTALLED_IMPLEMENTERS", "premium.PlansBillingAndPaymentsApi.getTpaSkus", "QUESTIONS.UPVOTE", "SIDEBAR.ENABLE_FILE_SHARE", "WIX_RESTAURANTS.ORDER_PACING_READ", "DISCOVERY.CONFIGURE", "MEDIA.SITE_MEDIA_FOLDERS_LIST", "premium.RefundUserApi.createRequest", "PARTNERS.MARKETPLACE_BRIEFS_READ", "TABLE_RESERVATIONS.RESERVATION_LOCATION_UPDATE", "ECOM.COLLECT_PAYMENTS", "premium.PlansBoApi.upsertPlanProduct", "CONTACTS_LABELS.LABELS_WIDGET", "BOOKINGS.SERVICE_OPTIONS_AND_VARIANTS_READ", "MEMBERS.MEMBER_TO_MEMBER_BLOCKS_WRITE", "BRANDED_APPS.READ_BUILD_SECRETS", "PARTNERS.MARKETPLACE_PROVIDER_STATE_UPDATE", "IAM.ENABLED_CONNECTIONS_UPDATE", "ECOM.DELIVERY_PROFILE_CREATE", "LOYALTY.MANAGE_REWARDS", "Account.ChangeStatus", "PARTNERS.PROPOSALS_UPDATE", "CONTACTS.SUBMIT_VISITOR_ID", "PORTFOLIO.SETTINGS_READ", "MEMBERS.MEMBER_ABOUT_UPDATE", "ENTERPRISE.ANALYTICS_VIEW", "WIX_STORES.INFO_SECTIONS_CREATE", "ECOM.ADJUSTMENT_READ", "WIX_MULTILINGUAL.REPORT_CREDIT_USAGE", "SIDEBAR.VIEW_ASCEND_ZERO_STATE", "LOYALTY.MANAGE_PROGRAM", "MEMBERS.CUSTOM_FIELDS_MANAGE_PRIVACY", "SEATING_PLANS.MANAGE_SEATING_PLANS", "LOYALTY.MANAGE_TIERS", "my-account.delete-contact", "WIX_DONATIONS.CAMPAIGNS_READ", "FACEBOOK-ADS.VIEW", "BOOKINGS.CHECKOUT_READ", "STUDIO.VIEW_CLIENT_KIT_SITE_ACTION", "PROMOTE.FACEBOOK_ADS_CAMPAIGN_CREATE", "LOGO_MAKER.ATTACH_SITE", "WIX_ATLAS.GET_PLACE", "BOOKINGS.OVERRIDE_AVAILABILITY", "WIX_STORES.CREATE_ORDERS", "premium.verifyTucowsRegistration", "PAYMENT_LINKS.PAYMENT_LINK_SET_NOTE", "TAGS.TAG_DELETE", "BOOKINGS.BOOKING_READ", "SIDEBAR.VIEW-BOOKINGS-INTEGRATION-CHANNELS", "WIX_EDUCATION.DELETE_CONTACT_BY_CONTACT_ID", "BOOKINGS.RESOURCE_TYPE_DELETE", "REFERRALS.MANAGE_REFERRED_FRIENDS", "my-account.enable-stores-orders", "DEV_CENTER.UPDATE_APP_INVITE", "notes.manage", "LOCATIONS.MANAGE", "SIDEBAR.ENABLE-PRINT-SHOP", "SIDEBAR.ENABLE-PARTNERS-DEALS", "premium.PlansTransferSiteApi.changePackageOwnership", "CHALLENGE_MANAGE.DELETE_CATEGORY", "SIDEBAR.ENABLE-GENERAL-INFO", "PAYMENTS.PAYMENT_READ", "html-editor.query-protected-pages", "CHALLENGE-MANAGE.CLONE-STEP", "SIDEBAR.ENABLE-VIDEO-SETTINGS", "wix-stores.read-shipping-rules", "BOOKINGS.CONFERENCE_ACCOUNT_RESCHEDULE_CONFERENCE", "WIX_MULTILINGUAL.CONTENT_READ", "WIX_MULTILINGUAL.CHANGE_MAIN_LANGUAGE", "RESTAURANTS.ITEM_READ", "USERS.CREATE_ACCOUNT_USERS", "VELO.REPUBLISH_PACKAGE", "WIXSTUDIO.WORKSPACE_ENABLE", "WIX_STORES.MODIFY_SHIPPING_RULES", "VIEWER_SERVER.BYOC_WRITE", "LOYALTY.READ_PROGRAM", "WIX_DATA.FIND", "API_KEYS.GET_ACCOUNT_KEYS", "SMS_PROVIDER.SMS_ACCOUNT_UPDATE", "paid-plans.sell-paid-plan", "SIDEBAR.VIEW_FAQSITE", "my-account.seo-wizard", "SIDEBAR.ENABLE_WISH_CHANNEL", "SIDEBAR.ENABLE_CRYPTO_NFT_PERMISSION", "premium.PlansEmailSender.getAutoRenewFalseByUserEmail", "BOOKINGS.RESOURCE_DELETE", "premium.PlansStoreApi.getProduct", "MEDIA.SITE_MEDIA_FILES_LIST_DELETED", "RATING.RATING_READ", "SEATING_PLANS.MANAGE_RESERVATIONS", "BLOG.SEARCH-ANY-DRAFT", "premium.PremiumStoreApi.getAllSbsCatalogProducts", "BRANDED_APPS.VALIDATE_PLAY_CONSOLE_INVITE", "BRANDED_APPS.VALIDATE_GCP_INVITE", "html-editor.view-revisions", "premium.GoogleMailBoxRefundApi.getPackageBySbsServiceId", "PROMOTE_GBP_FEATURE.FEATURE_UPDATE", "BUSINESS_MANAGER.CRM.WORKFLOWS_WIDGET", "REFERRALS.MANAGE_PROGRAM", "CALENDAR.MANAGE_ALL_EXTERNAL_CALENDAR_CONNECTIONS", "ANALYTICS_AND_REPORTS.CREATE_REPORT", "PROPOSALS.PROPOSAL_TEMPLATE_UPDATE", "SIDEBAR.ENABLE_RECURRING_INVOICES", "WIX_HEADLESS.AUTHORIZE_URL", "WIX_DATA.COUNT", "SALESFORCE.INTEGRATION_WRITE", "PROMOTE.SENDER_DETAILS_READ", "premium.PlansDealerApi.getProductDataForDealer", "REFERRALS.READ_PROGRAM", "WIX_EVENTS.MANAGE_TICKETS", "CALENDAR.READ_OWN_EXTERNAL_CALENDAR_CONNECTIONS", "BOOKINGS.CONFERENCE_ACCOUNT_DELETE", "PROPOSALS.PROPOSAL_TEMPLATE_CREATE", "AUTHORIZATION.ASSIGN_POLICIES", "APP_MARKET.ADD_AGAIN", "wix-stores.modify-fulfillers", "BOOKINGS.RESOURCE_TYPE_UPDATE", "MEMBERS.MEMBER_READ", "ENTERPRISE.DOMAIN_IP_RANGES_RULE_DELETE", "WIX_FORMS.FORM_SPAM_SUBMISSION_REPORT_CREATE", "MEMBERS_GROUPS.LIST_GROUPS", "WIX_DATA.QUERY_DISTINCT_VALUES", "premium.GoogleMailboxStoreApi.getValidPackageForUpgrade", "CORVID.GET_PAGES_DETAILS_DEV", "ANALYTICS_AND_REPORTS.CAN_SUBSCRIBE_REPORTS", "premium.VouchersBoApi.allocateVouchersForPackageAndAllocationTypeWithAuth", "FAQ.READ_QUESTIONS", "FILE_SHARE.RENAME", "calendar.manage-linked-sessions-notes", "PRICING_PLANS.CHANGE_START_DATE", "virtual-numbers.view", "premium.TransferSiteStoreService.getServicesForTransfer", "premium.getManagePlansInfo", "ECOM.MANAGE_LOCAL_DELIVERY_OPTIONS", "WIX_PARTNERS.GENERALBENEFITS_SITE", "BOOKINGS.BOOKING_CONFIRM", "DEVELOPMENT_SITES.READ", "ANALYTICS_AND_REPORTS.SET_PARTNER_DIGEST_SETTINGS", "TIPS.READ_SLOT_STATUS", "WIX_HOTELS.MANAGE_CHANNEL_MANAGER", "my-account.open-wix-video", "BILLING.TAX_SETTINGS_UPDATE", "TYPOK.SITE_READ", "COLLECTION.MANAGE", "RESTAURANTS.DELIVERY_ORDER_READ", "PROPOSALS.INITIALIZE", "CHALLENGE-MANAGE.CREATE-CHALLENGE", "premium.BoToMsnService.getEmailCancellationsByUserGuid", "MEMBERS.DEFAULT_PRIVACY_STATUS_READ", "ECOM.SCOPES_READ", "PARTNERS.MANAGE-MARKETPLACE-LEADS", "WIX_RESTAURANTS.SERVICE_FEES_RULES_READ", "ECOM.VIEW_ORDER_EMAIL_TEMPLATES", "site-users.view-invitations", "DEV_CENTER.READ_COMPONENTS", "CORVID.NPM-REQUESTS-LIST", "WIX-GROUPS.ADD_MEMBER", "ECOM.ADMIN_MODIFY_CHECKOUTS", "VELO_BO.VIEW_SITE_ANALYSIS", "my-account.view-payments", "premium.PlansEmailSender.getNewPurchasePlanEmail", "POS.TIME_CARDS_READ", "premium.PaymentsHistoryApi.getUserInvoices", "BENEFIT_PROGRAMS.TRANSACTION_CREATE", "MEMBERS_GROUPS.COUNT_GROUPS", "TABLE_RESERVATIONS.TIME_SLOT_CHECK", "ENTERPRISE.DOMAIN_IP_RANGES_RULE_UPDATE", "REVERSE_PROXY.ROUTE_UPDATE", "WIX_STORES.BRAND_UPDATE", "CHALLENGE_MANAGE.CREATE_CATEGORY", "premium.RefundBackofficeApi.getRequestsWaitingForTooLong", "premium.DigitalGoodsCustomerApi.getPackages", "WIX_EDUCATION.IS_EDUCATION_STUDENT", "REVIEWS.REVIEW_REQUEST_READ", "premium.SubscriptionsManager.getSubscription", "WIX_FORUM.POST_LIKE", "BOOKINGS.AVAILABILITY_READ_MULTI_SLOT", "site-settings.modify", "Account.UpdateProperties", "CHALLENGE-MANAGE.UPDATE-STEP", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.AUTO_RENEW_ON", "ECOM.CHECKOUT_TEMPLATE_DELETE", "WIX_STORES.INVENTORY_CREATE", "WIX_FORUM.MOBILE_SETTINGS_GET", "FAQ.UPDATE_QUESTION", "INBOX_CHANNELS.MANAGE_FACEBOOK_SUBSCRIPTIONS", "CRM_FINANCIAL.SETTINGS_READ", "PING.OWNER_NOTIFICATIONS_RECEIVE", "CLEAR_CONTRIBUTOR_ROLES", "premium.PlansStoreApi.getActivePackageByGuid", "MEMBERS.MEMBER_APPROVE", "GENIE.CONVERSATION_SUMMARY_READ", "SIDEBAR.VIEW-STUDIO-HOME", "BLOG.EDIT_SETTINGS", "RESOURCES.RESOURCE_CHECK_RESOURCES_AVAILABILITY", "BRANDED_APPS.CREATE_COOKIES", "SIDEBAR.ENABLE-VIDEO-LIVE-STREAM", "premium.PremiumUserManager.getUserTpaPackageByAppDefId", "CRM_INBOX.MANAGE_TEAMS", "ECOM.MANAGE_SHIPPING_LABEL", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.METASITE", "REFERRALS.READ_REFERRING_CUSTOMERS", "SIDEBAR.VIEW_POS", "BOOKINGS.SERVICES_PRICING_PLANS_REMOVE", "PARTNERS.PARTNERS_PROGRAM_JOIN", "BLOG.EDIT-DRAFT", "WIX_DATA.TRUNCATE", "WIX_PARTNERS.READ_PARTNER_DASHBOARD", "PROMOTE.PUBLISHER_ITEM_DELETE", "ECOM.READ_INVOICES", "WIX_COMMENTS.BULK_COMMENT_PUBLISH", "PARTNERS.MARKETPLACE_TEMPLATE_LISTING_DELETE", "BOOKINGS.NUMBER_OF_PARTICIPANTS_UPDATE", "Account.MarkAccountFlag", "CASHIER.PAYMENT_PROVIDERS_READ", "RESTAURANTS.LABEL_UPDATE", "WIX_FORMS.SUBMISSION_CREATE", "premium.PlansStoreApi.getProductDowngradePath", "WIX_FORMS.SPAM_SUBMISSION_CREATE", "BOOKINGS.STAFF_MEMBER_READ", "paid-plans.manage-purchased-plans", "WIXSTUDIO.AGENCY_CONTACT_READ", "BENEFIT_PROGRAMS.PROGRAM_END", "PARTNERS.MARKETPLACE_PROJECT_CLIENT_READ", "LOYALTY.READ_EARNING_RULES", "folders.rename", "BENEFIT_PROGRAMS.POOL_REDEEM", "ENTITLEMENTS.ENTITLEMENT_REDEEM", "premium.PlansBoApi.getAllUserPlanPackages", "GOOGLE_MAILBOX_MANAGEMENT_API.GET_GOOGLE_CUSTOMER", "WIX_STORES.INFO_SECTIONS_READ", "PREMIUM.ASSIGN_TO_SITE", "SIDEBAR.VIEW-RESTAURANTS-RESERVATIONS-SETTINGS", "VOTES.READ", "DEV_CENTER.CREATE_APP_INVITE", "MEDIA.ENTERPRISE_MEDIA_CATEGORIES_DELETE", "premium.SubscriptionsManager.transferFromAnotherUser", "premium.PlansBoApi.duplicateProduct", "SITE_PROPERTIES.UPDATE_BUSINESS_SCHEDULE", "PRICING_PLANS.REGISTER_ONLINE_ORDERS", "SIDEBAR.VIEW_AMAZON_CHANNEL", "VIDEO_MAKER.GET", "my-account.open-etpa", "STUDIO.VIEW_CUSTOM_TEMPLATE_PAGE", "APP_MARKET.OPEN_APP", "EDITOR_REVISIONS.READ", "RESTAURANTS.VARIANT_READ", "CASHIER.PROVIDER_ACCOUNTS_CREATE", "MEMBERS.FOLLOW_READ", "ENTITLEMENTS.ENTITLEMENT_PROVISION", "SITES.MOVE_TO_TRASH", "CALENDAR.READ_EXTERNAL_CALENDAR_EVENTS", "POS.TIME_CARDS_DELETE", "premium.GmailTransferSiteApi.getGooglePackageForDomain", "WIX_DATA.SET_DATA_MODE", "PROPOSALS.PROPOSAL_ISSUE_PAYMENT", "WIX_EVENTS.UPDATE_COMPONENT", "WIX_MULTILINGUAL.MANAGE_AUTO_REDIRECT", "PORTFOLIO.COLLECTION_CREATE", "WIX_PARTNERS.UPDATE_PARTNER_ACCOUNT", "LOGO_MAKER.DOWNLOAD_LOGOS", "premium.RefundBackofficeApi.processAllRequestsApprovedByAgent", "CURRENCY_CONVERTER.MODIFY_SITE_CURRENCIES", "BOOKINGS.RESOURCES_READ", "BOOKINGS.SERVICES_UPDATE", "TAGS.TAG_CREATE", "premium.PlansBoApi.updateProductName", "ECOM.CREATE_ORDERS", "SIDEBAR.VIEW_PARTNER_PACKAGE", "PAYMENTS.BALANCE_READ", "PREMIUM.GET_ASSET_BY_PREMIUM_ID", "WIX_COMMENTS.BULK_COMMENT_DELETE", "SIDEBAR.VIEW_RESTAURANTS_MENUS_SHOWCASE", "WIX_FORMS.FORM_SPAM_SUBMISSION_REPORT_CHECK_FOR_SPAM", "FAQ.UPDATE_QUESTIONS_VISIBILITY", "my-account.view-premium-subscription", "wix-stores.modify-orders", "BILLING.AVALARA_TAX_MERCHANT_UPDATE", "WIX_STORES.PRODUCT_READ", "my-account.duplicate-site", "GOOGLE_MAILBOX_MANAGEMENT_API.SETUP_USER_MAILBOX", "SIDEBAR.VIEW_CRYPTO_NFT_PERMISSION", "GENIE.AGENT_MEMORY_READ", "ANALYTICS_SERVER_REPORTER.MANAGE", "WIX_EVENTS.CREATE_NOTIFICATION_CONFIG", "SIDEBAR.VIEW-SITE-MEMBERS", "onboarding.unpublish", "PAYMENT_LINKS.PAYMENT_LINK_CREATE", "SIDEBAR.VIEW-PRINT-SHOP", "premium.TransferSiteBoService.getUserSiteTransfers", "SIDEBAR.VIEW-STORES-SETTINGS", "premium.PremiumDomainManager.runDomainSyncTask", "POS.CASH_DRAWER_READ", "ECOM.READ_SETTINGS", "RATING.RATING_UPDATE", "dashboard.view-analytics-widget", "AUTOMATIONS.AUTOMATION_VALIDATE", "MEMBERS.ABOUT_PUBLISH", "WIX_CODE.VSCODE_EDITOR", "my-account.view-stores-orders", "WIX_FORMS.FORM_RESTRICTIONS_GET", "RESTAURANTS.MENU_CREATE", "WIX_CODE_BM.CHECK_ELIGIBILITY", "REVERSE_PROXY.ROUTE_CREATE", "premium.SubscriptionsManager.listUserCancellationRequests", "STUDIO.VIEW_REVENUE_SHARE", "MEMBERS.MEMBER_READ_PRIVATE", "WIX_DATA.SHARED_DATA_COLLECTION_LIST_POLICIES", "PRICING_PLANS.READ_PUBLIC_PLANS", "premium.assets.notCancelable", "ACCOUNT_CM.SITE_MEDIA_TOKEN_READ", "WIX-FORUM.CATEGORY-SUBSCRIBE", "BI.QUERY_USER_PROFILE", "premium.PlansTransferSiteApi.getSiteActivePlan", "CHALLENGE-MANAGE.UPDATE-CHALLENGE", "SMART_ACTIONS.MANAGE_ACTION", "MANAGE_TEAM_MEMBER_ROLES", "MEDIA.MEDIA_MANAGER_OPEN", "my-account.connect-domain", "premium.PremiumUserHighPriorityNotifier.notifyOnChargeback", "premium.WixDealerService.getCouponId", "WIX_STORES.READ_FB_ACCESS_TOKEN", "BOOKINGS.CATEGORIES_READ", "EDITORX.DEV_MODE", "WIX_EVENTS.MANAGE_TICKET_DEFINITIONS", "PAYMENTS.RECURRING_PAYMENTS_MANAGE", "ENTERPRISE.TEAM_VIEW", "SIDEBAR.VIEW-RESTAURANTS-PHONE-OREDERS", "site-actions.restore-site", "ENTERPRISE.MEDIA_NOTIFY", "FILE_SHARE.UPDATE_SETTINGS", "premium.PlansBillingAndPaymentsApi.getPlanBySbsServiceId", "ECOM.READ_CHECKOUT_COMPOSER_SCHEMA", "CHALLENGE-MANAGE.GET-INVITE-LINK", "PROPOSALS.PROPOSAL_DELETE", "WIX_EVENTS.MANAGE_AGENDA", "WIX_FORUM.CATEGORY_MARK_READ", "DATA_SCIENCE.LLM_READ", "ADI.CREATE_SITE", "CALENDAR.SESSION_READ", "premium.PremiumManagementEmailSenderApi.sendEmailToNonRegisteredUser", "MetaSite.Read", "SIDEBAR.ENABLE_RESTAURANTS_RESERVATION_GATE", "WIX_FORMS.SPAM_SUBMISSION_UPDATE", "premium.PlansEmailSender.getPlanRenewalEmail", "REVIEWS.MODERATE_REVIEWS", "BILLING.AVALARA_TAX_CREDENTIALS_UPDATE", "ANALYTICS_AND_REPORTS.USER_SETTINGS_READ", "MEMBERS.MEMBER_PRIVACY_SETTINGS_SET", "PROMOTE.GOOGLE_ADS_ACCOUNT_CREATE", "BENEFIT_PROGRAMS.POOL_RESERVATION_CANCEL", "PREMIUM.ASSETS_RECOLLECT_ASSETS", "bookings.manage-own-sessions", "RATING.RATING_GET_ENTITY_SUMMARY", "ECOM.GET_APPLICABLE_TRIGGERS", "DOMAINS.READ_DOMAIN_REGISTRATIONS", "LIVE_VIDEO.MANAGE_CHAT", "PREMIUM_MANAGEMENT.PAYMENT_METHODS_GET_PAYMENT_METHOD_CONTRIBUTORS", "FILE_SHARE.DELETE", "BOOKINGS.BOOKING_CONFIRM_OR_DECLINE", "my-account.delete-site", "PARTNERS.MARKETPLACE_PROJECT_UPDATE", "WIX_DATA.SET_SANDBOX_MODE", "CHALLENGE-PARTICIPATE.JOIN-CHALLENGE", "PRESETS_GALLERY_MANAGER.GALLERY_READ", "VELO.IDE_SPI_CREATE", "SOCIAL-GROUPS.MANAGE", "EDITOR.DEEP_CLONE_BRANCH", "WIX_EVENTS.MANAGE_ORDERS", "TABLE_RESERVATIONS.RESERVATION_UPDATE_FORCE", "IAM.CONNECTION_TOGGLE", "WIX_DATA.DRIVER_REMOVE_REFERENCES", "premium.AppMarketTempApi.createAppSkusForTesting", "premium.SitePropertiesInternalApi.getSiteNames", "SIDEBAR.VIEW_PROPOSALS", "POS.POS_SETTINGS_UPDATE", "SIDEBAR.VIEW-PROMOTE-HOME", "ENTERPRISE.ROUTES_VIEW", "wix-seo.edit", "premium.WixDealerService.getPremiumPlansPackagePickersWithoutSales", "premium.MsnMailerClient.getAboutTobeRenewedEmail", "SIDEBAR.ENABLE-STORES-SHIPPING-SETTINGS", "BRANDED_APPS.READ_BUILD_CONFIG", "premium.StoreMailboxOldApi.getMailboxSaleTypeForSite", "ONLINE_PROGRAMS.INSTRUCTORS_READ", "LOGO_MAKER.CREATE_LOGO", "WIXLY.URL_RESTRICTED_CREATE", "SIDEBAR.ENABLE-RESTAURANTS-SOCIAL", "WIX_STORES.INFO_SECTION_CREATE", "WIX_STORES.MARKETPLACE_SETTINGS_CREATE", "WIX_STORES.WISH_TOKEN_DEACTIVATE", "CALENDAR.SCHEDULE_CREATE", "premium.loadPlanFeaturesApp", "POS.DEVICE_CONNECTION_READ", "URL_MAPPER.READ", "paid-plans.view-purchased-plans", "WIX_DATA.BULK_INSERT", "BADGES.BADGE_UPDATE_DISPLAY_ORDER", "premium.manageDomains", "POS.CHECKOUT-CUSTOMERS", "PROMOTE.SOCIAL_MARKETING.MANAGE", "promote-marketing-integrations.manage", "VELO.GET_CSS_FOR_PAGE_DEV", "shared-gallery.manage", "RESTAURANTS.OPERATION_DELETE", "premium.PlansStoreApi.isValidUpgrade", "BLOG.READ-BLOG", "ACCOUNT.CREATE_ACCOUNT_AND_ASSIGN_USER", "SIDEBAR.VIEW_BLOG_WRITERS", "WIX_STORES.MARKETPLACE_PRODUCT_READ", "premium.PremiumMsnRpc.didUserEverOwnAGoogleMailPackage", "CALENDAR.EVENT_CANCEL_OWN", "BOOKINGS.MANAGE_BUSINESS", "SIDEBAR.VIEW-ADMIN-PAGES", "ASSIGN_ROLES_TO_CONTRIBUTOR", "SHARED_GALLERY.MEMBERS_READ_WRITE", "WIX_DATA.DRIVER_IS_REFERENCED", "EDITORX.EDIT_BASIC", "BOOKINGS.CONFERENCE_ACCOUNT_DELETE_CONFERENCE", "GIFT_CARDS.READ_GIFT_CARDS_DATA", "BENEFIT_PROGRAMS.PROGRAM_DEFINITION_UPDATE", "WIX_HOTELS.VIEW_REVENUE_ACCOUNTS", "CALENDAR.SCHEDULE_CANCEL", "CODUX.IDE_FILES_OVERWRITE", "ANALYTICS_AND_REPORTS.SITE_BENCHMARK_READ", "my-account.enable-manage-bookings-staff", "premium.MsnStoreServices.getAllSkus", "BOOKINGS.MANAGE", "SITE_PROPERTIES.UPDATE_CONSENT_POLICY", "premium.PlansPurchasePageControllers.createPlansOrderPageV2.siteLevel", "folders.delete", "SIDEBAR.VIEW-GROUPS", "WIX_STORES.MODIFY_PRODUCTS", "CASHIER.READ_PAYMENTS", "SIDEBAR.ENABLE-STUDIO-HOME", "TOPICS.CREATE", "WIX_CHAT.OPEN_WIDGET", "PROMOTE.SENDER_EMAILS_VERIFY", "WIX_COMMENTS.BULK_COMMENT_MOVE", "CONTACTS.VIEW", "VELO.DATABASE_DEPLOYMENT_READ", "premium.PlansStoreApi.getSiteValidUpgrades", "IAM.OIDC_CONFIG_CREATE", "ECOM.DELIVERY_PROFILE_READ", "SIDEBAR.VIEW_TIKTOK_CATALOG", "WIX_HOTELS.VIEW_RESERVATION_CALENDAR", "WIX_EVENTS.CHECKOUT", "VELO.GET_PAGES_DETAILS_DEV", "RESTAURANTS.VARIANT_UPDATE", "ACCOUNT_CM.PAGE_CONFIG_READ", "VELO.NPM_PACKAGE_DETAILS_READ", "CASHIER.PROVIDER_ACCOUNTS_READ", "WIXSTUDIO.AGENCY_CONTACT_CREATE", "ECOM.ADD_INVOICE", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.HAS_MANUAL_PAYMENT_METHODS", "BENEFIT_PROGRAMS.PROGRAM_DEFINITION_CREATE", "SIDEBAR.VIEW_SITES_LIST", "WIX_STORES.MODIFY_SUBSCRIPTION_OPTIONS", "premium.assets.updatePaymentMethod", "SIDEBAR.VIEW-VIDEO-LIBRARY", "premium.PlansEmailSender.getCancellationDueToPaymentProblemsEmail", "BENEFIT_PROGRAMS.POOL_RESERVE", "GOOGLE_MAILBOX_MANAGEMENT_API.EDIT_USER", "WIX_FORMS.SPAM_SUBMISSION_READ", "API_KEYS.GET_KEY_DATA", "GOOGLE_MAILBOX_MANAGEMENT_API.CAN_PURCHASE", "BLOG.DELETE_TAG", "premium.reseller-package.manage", "WIXSTUDIO.CLIENT_KIT_RESOURCE_UPDATE", "premium.PlansPackagePickerControllers.preview", "SIDEBAR.ENABLE-OLD-ECOM", "WIX_FORUM.FORUM_EDIT", "premium.InvoicesService.getInvoice", "BOOKINGS.SERVICES_CUSTOM_SLUGS_SET", "premium.CmsBackOfficeServerRpc.testPlans", "POS.REPORTS-VIEW-PREVIOUS-DAYS", "CALENDAR.MANAGE_LINKED_SESSIONS_NOTES", "SIDEBAR.ENABLE-DOMAINS", "subscriptions.view", "WIX_HOTELS.VIEW_INVENTORY_CALENDAR", "ECOM.READ_PAYMENT_METHODS", "WIX-FORUM.POST-PIN", "WIX_FORMS.SPAM_SUBMISSION_VALIDATE", "team.change-member", "AUTOMATIONS.TRIGGER_READ", "html-editor.publish", "CHECKOUT_REQUIREMENTS.RULES_CREATE", "CALENDAR.EVENT_READ_PI", "premium.PremiumDomainManager.getWixDomainInfo", "WIX_STORES.MARKETPLACE_PRODUCT_ERROR_READ", "DEV_CENTER.GET_APP_INVITE", "CHALLENGE-MANAGE.GET-CHALLENGE-SUMMARY", "BRANDED_APPS.WRITE_MOBILE_CONFIG", "POS.LOCALE_DATA_READ", "GENIE.CONVERSATION_READ", "SIDEBAR.ENABLE_MARKETPLACE_LEADS", "WIXSTUDIO.TEMPLATE_CREATE", "premium.DomainsPurchasePageController.domainPurchasePage.siteLevel", "BENEFIT_PROGRAMS.POOL_RESERVATION_RELEASE", "ONLINE_PROGRAMS.PROGRAM_DELETE", "SIDEBAR.ENABLE-APP-MARKET", "DEV_CENTER.READ_APPS", "CURRENCY_CONVERTER.READ_SITE_CURRENCIES", "MEDIA.SITE_MEDIA_FILES_REMOVE_FROM_TRASH", "file-sharing.manage", "ECOM.DELIVERY_CARRIER_READ", "VELO.PACKAGE_STATUS", "OAUTH_APP.APP_UPDATE", "WIX_STORES.RIBBON_READ", "premium.PremiumDomainManager.getRegDotComDomainStatus", "premium.PlansTpaApi.getUserPremiumTpas", "BOOKINGS.BOOKING_FEES_READ", "bookings.manage-services", "BENEFIT_PROGRAMS.ITEM_CLONE", "WIX_RESTAURANTS.ORDER_PACING_POLICIES_READ", "BRANDED_APPS.RECEIVE_NOTIFICATIONS", "BOOKINGS.AVAILABILITY_READ_MULTI_SERVICE_TIME_SLOTS", "BOOKINGS.CREATE_BOOKING", "WAIVER_TEMPLATE.VIEW", "wix-stores.modify-shipping-rules", "QUESTIONS.UPDATE", "premium.MailboxPurchasePageControllers.loadMailboxAddSeatsPurchasePage", "github-metadata.get-user", "BOOKINGS.SERVICES_DELETE", "VELO.PAGE_IMPORTED_NAMESPACES_DEV_READ", "PARTNERS.PARTNERS_PROGRAM_SYNC", "LIVE_VIDEO.READ_CHAT", "APPS_INSTALLER.DELETE", "WAIVER.MANAGE", "PREMIUM_MANAGEMENT-PAYMENT.METHODS-LIST", "WIX_ATLAS.PREDICT", "WIXLY.URL_UPDATE", "WIX_COMMENTS.COMMENT_MARK", "premium.PlansDashboardApi.getUserTpaPackages2", "SIDEBAR.ENABLE-SITE-MONITORING-SETTINGS", "WIX_EVENTS.STAFF_MEMBER_DELETE", "DEV_CENTER.CREATE_COMPONENT", "RCE.EDIT_ANY_POLL", "SECRETS_VAULT.SECRET_DELETE", "WIX_DATA.LIST_CONNECTORS", "premium.provisioning.manage", "QUIZZES.DELETE_QUIZ", "ONLINE_PROGRAMS.PARTICIPANT_INVITE", "premium.PlansBillingAndPaymentsApi.getPlansByUserGuid", "BILLING.TAX_GROUP_MAPPING_UPDATE", "premium.assets.transfer", "DEV_CENTER.CHANGE_APP_CONTRIBUTOR_ROLE", "MEDIA.GET_RECOMMENDED_MEDIA", "BILLING.TAX_REGIONS_CREATE", "ANALYTICS_AND_REPORTS.GET_PARTNER_DIGEST_SETTINGS", "VELO.NPM_REQUESTS_WRITE", "BOOKINGS.RESOURCE_TYPE_CREATE", "MEMBERS.CUSTOM_FIELDS_READ_SITE_SETTINGS", "SIDEBAR.ENABLE-SUBSCRIPTIONS", "premium.PlansTransferSiteApi.getPlanName", "PARTNERS.CONNECT_SITE", "premium.DealerChangePlanApi.isSiteEligibleForChangePlan", "SIDEBAR.VIEW-PARTNERS-DEALS", "MEMBERS.SEND_SET_PASSWORD_EMAIL", "CRM_NOTES.NOTE_CREATE", "WIX_STORES.MANAGE_SHIPPING_RULES", "PROMOTE.FACEBOOK_ADS_ACCOUNT_DELETE", "CALENDAR.SESSION_READ_PI", "CRM_FINANCIAL.SETTINGS_MANAGE", "wix-events.admin", "PROMOTE.GOOGLE_ADS_CAMPAIGN_READ", "WIX_MULTILINGUAL.EDIT_LANGUAGE", "RATING.RATING_DELETE", "MEDIA.SITE_MEDIA_FILES_DOWNLOAD_URL", "site-actions.move-site-to-folder", "PAYMENTS.TRANSACTIONS_READ", "SIDEBAR.VIEW-NOTIFICATION-SETTINGS", "wix-quotes.manage", "premium.PlansTransferSiteApi.isPlanInTrial", "MEMBERS.FOLLOW_READ_MY", "wix-stores.read-fulfillers", "SIDEBAR.VIEW-COUPONS", "PROMOTE.SENDER_EMAILS_CREATE", "SIDEBAR.ENABLE-VIDEO-CHANNELS", "BILLING.AVALARA_TAX_GROUPS_MAPPINGS_CREATE", "TABLE_RESERVATIONS.FORMATTED_RESERVATION_READ", "MEDIA.GET_PUBLIC_MEDIA_PROXY", "PREMIUM.UPDATE_PAYMENT_REQUEST", "RELEASE_MANAGER.READ_REVISIONS_EXPOSURE", "CHALLENGE-PARTICIPATE.REQUEST-JOIN", "WIX_PARTNERS.CREATE_PARTNER_ACCOUNT", "WIX_EDUCATION.VALIDATE_TEACHER_COLOR", "MEMBERS_GROUPS.MANAGE", "CATEGORIES.CATEGORY_ADD_ITEM", "PREMIUM.CHECKOUT-SERVER-API-TRANSFER", "SIDEBAR.VIEW-TASKS", "STUDIO.VIEW_CUSTOM_APPS_PAGE", "premium.PlansRefundApi.fixCancellationRecord", "WIX_STORES.VARIANT_READ", "RESTAURANTS.ITEM_QUERY", "PROPOSALS.PROPOSAL_SET_TEMPLATE", "CLASSIC-EDITOR.EDIT-DESIGN", "PARTNERS.PROPOSALS_READ", "SIDEBAR.ENABLE_TABLE_RESERVATIONS_SETTINGS", "SIDEBAR.ENABLE_BLOG_WRITERS", "my-account.untag-contact", "VELO.LIST_EXPORTED_FUNCTIONS_DEV_V2", "WIX_EVENTS.READ_POLICIES", "ANYWHERE.THEME_OVERRIDE_CREATE", "VELO.APP_CREATE", "BOOKINGS.SERVICE_OPTIONS_AND_VARIANTS_CREATE", "SIDEBAR.VIEW-SITE-MONITORING-SETTINGS", "RESTAURANTS.MENU_ORDERING_SETTINGS_READ", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETMONTHLYRECOMMENDEDTOSTANDARDORPLUSMAIL", "SIDEBAR.ENABLE-SEO-PATTERNS", "ENTERPRISE.CUSTOM_TEMPLATES_LIST", "premium.PlansPackagePickerControllers.loadPlansPackagePickerFromSaleEmail", "RESTAURANTS.MODIFIER_GROUP_READ", "POS.SETTINGS-MANAGE-CASH-MANAGEMENT", "WIX_FORMS.VIEW_SUBMISSIONS", "EDITORX.ENFORCE_PRESENCE_VISIBILITY", "WIX_EVENTS.READ_DRAFT_EVENTS", "IAM.SECURITY_POLICY_READ", "BOOKINGS.CONFERENCE_ACCOUNT_CREATE_UPDATE", "SIDEBAR.VIEW-VIDEO-SITE-TRAFFIC", "RESTAURANTS.DOORDASH_SETTINGS_READ", "MEDIA.ENTERPRISE_MEDIA_CATEGORIES_MEDIA_MANAGER_READ", "account-manager.view-vouchers-on-sidebar", "PRICING_PLANS.MANAGE_PLANS", "premium.CmsBackOfficeMediaGalleryRpc.uploadImageWith", "WIX_EVENTS.READ_EVENTS", "premium.biz-manager-plan-state", "BOOKINGS.READ_BOOKINGS", "premium.SubscriptionsManager.cancelImmediately", "VELO.APP_SYNC_REMOTE", "BILLING.AVALARA_TAX_GROUPS_MAPPINGS_READ", "Account.UpdateSlugName", "BLOG.DELETE_SEO", "REVIEWS.CREATE_CONFIGURATION", "SIDEBAR.ENABLE-EVENTS", "premium.PlansTpaApi.getSitesPremiumTpas", "INNOVATION_LAB.WIX_ASSISTANT", "WIX_HOTELS.VIEW_PROPERTY_SETTINGS", "IDENTITY.GROUP_UPDATE", "WIX_EVENTS.READ_MEMBER_RSVP", "POS.VIEW_PICK_UP_NOTIFICATIONS", "CALENDAR.SCHEDULE_READ_PI", "WIX_DATA.BULK_SAVE_SCHEMAS", "PARTNERS.REV_SHARE_GPV_PAYOUT_READ", "TABLE_RESERVATIONS.SITE_SETTINGS_READ", "PARTNERS.MARKETPLACE_ACTIONS", "BLOG.READ_LIKE", "WIX_FORMS.MANAGE_EMAILS", "premium.PlansPurchasePageControllers.renderPlansSuccessPage", "SIDEBAR.ENABLE-RELEASE-MANAGER-SETTINGS", "QUIZZES.CREATE_SUBMISSION", "BOOKINGS.MANAGE_SERVICES", "MEMBERS.MEMBER_CREATE", "SIDEBAR.VIEW_TAX_DOCUMENTS", "TARAS.TEST-MANAGE", "RATING.RATING_CREATE", "ONLINE_PROGRAMS.PARTICIPANT_READ", "BLOG.SEARCH-OWN-DRAFTS", "SIDEBAR.VIEW_PAYOUTS", "one-app.customize-place", "sites-list.view", "LOYALTY.MANAGE_COUPONS", "WIX_EVENTS.MANAGE_POLICIES", "WIX_FORUM.POST_MARK_READ", "PREMIUM.LOAD_SITE_PLANS_PP", "account-manager.view-payment-methods-on-sidebar", "premium.PremiumMsnRpc.createMsnTxtVerificationRecord", "BILLING.TAX_GROUP_MAPPING_READ", "team.delete-invite", "REFERRALS.READ_REFERRAL_EVENTS", "CLASSIC-EDITOR.EDIT-CONTENT", "WIX_STORES.MARKETPLACE_APP_INSTALL_STATUS_READ", "BLOG.CREATE-DRAFT", "WIX_DATA.GET_COLLECTION_DATASETS", "WIX_EVENTS.READ_RSVP_CONTACT_DETAILS", "OPEN_AI_CLIENT.EMBEDDINGS_ACCOUNT_LEVEL", "WIX_COMMENTS.COMMENT_READ", "GENIE.KNOWLEDGE_READ", "WIX-FORUM.POST-ADD-BEST-ANSWER-COMMENT-ALL", "SIDEBAR.ENABLE_PROPOSALS", "SIDEBAR.ENABLE-APPS", "ANALYTICS_AND_REPORTS.VIEW_SITE_REPORT", "WIX_EDUCATION.IS_USER_SITE_OWNER", "POS.CHECKOUT-APPLY-CUSTOM-DISCOUNT", "WIX-FORUM.COMMENT-VOTE", "wix-stores.modify-products", "my-account.view-contact-list", "FOLDERS.UPDATE", "WIX_NFT.CATALOG_READ", "PARTNERS.MANAGE_MARKETPLACE_OVERVIEW", "ANALYTICS_AND_REPORTS.HOPP_LINKS_READ", "app-builder.write", "DISCOVERY.CREATE", "SIDEBAR.VIEW-OLD-BLOG", "BOOKINGS.FORMS_READ", "premium.GmailTransferSiteApi.getGooglePackageForDomainAndUser", "ECOM.DRAFT_ORDERS_CREATE", "ONE_APP.CONTACT_PICKER", "WIX_EVENTS.READ_COMPONENT", "CASHIER.MERCHANT_READ", "ITEMS_SELECTION.LIST_INSTALLED_PROVIDERS", "BRANDED_APPS.SYNC_IAP_PRODUCTS", "SIDEBAR.ENABLE-VIDEO-LIBRARY", "ECOM.ABANDONED_CHECKOUT_READ", "premium.GoogleMailboxToBoApi.getAllUserPackages", "SIDEBAR.VIEW_PAY_LINKS", "premium.PremiumTpaFacade.getSiteTpas", "premium.DomainsPlansAssignmentApi.connectPlanToSite", "ECOM.PICKUP_LOCATION_CREATE", "premium.RegDotRuPremiumApiFacade.getUserDomains", "premium.PremiumMsnServices.turnAutoRenewOff", "BILLING.TAX_REGIONS_UPDATE", "html-editor.restore", "SIDEBAR.VIEW-RESTAURANTS-DISCOUNTS", "BOOKINGS.MANAGE_FORMS", "ACCOUNT_MANAGER.VIEW_DOMAINS_ON_SIDEBAR_STUDIO", "AUTOMATIONS.AUTOMATION_DELETE", "SIDEBAR.ENABLE-STORES-PAYMENTS", "premium.UserTransfers.transferSiteDataBy", "premium.PremiumMsnServices.didDomainEverHadAPackage", "BLOG.CREATE-CATEGORY", "BUSINESS_MANAGER.MANAGE_BUSINESS_INFO", "premium.getTpaPremiumState", "LOYALTY.REDEEM_OWN_COUPON", "PREMIUM.GET_PAYMENT_REQUEST", "crm-inbox.settings", "SECRETS_VAULT.SECRET_READ", "ENTITLEMENTS.TEMPLATE_DELETE", "BOOKINGS.MANAGE_PAYMENTS", "my-account.view-dashboard", "ENTITLEMENTS.ENTITLEMENT_READ", "ECOM.READ_BACK_IN_STOCK_NOTIFICATION_SETTINGS", "PARTNERS.PROFILE_UPDATE", "WIX_EVENTS.UPDATE_NOTIFICATION_CONFIG", "premium.DigitalGoodsBillingAndPaymentsApi.sendEmail", "PAYMENT_LINKS.PAYMENT_LINK_DELETE", "IAM.ENABLED_CONNECTION_READ", "RESTAURANTS.OPERATION_READ", "WIX_STORES.MODIFY_LOCATION_INVENTORY", "premium.PremiumMsnServices.getAllUserPackages", "WIX_STORES.READ_CARTS", "premium.PremiumDashboardFacade.unAttachPremiumDataForSite", "AUTHORIZATION.DELETE_POLICY_ASSIGNMENTS_ON_SUB_ACCOUNTS", "WIX_STORES.BRAND_CREATE", "WIX_STORES.COUPONS_MANAGE", "PREMIUM_MANAGEMENT.PAYMENT_METHODS_GET_SITE_CONTRIBUTORS", "WIX_STORES.READ_SUBSCRIPTION_OPTIONS", "WIX_RESTAURANTS.MANAGE_PERMISSION", "PROMOTE.ADS_TXT_WRITE", "SIDEBAR.ENABLE-PAID-ADS", "PROMOTE.FACEBOOK_ADS_ACCOUNT_UPDATE", "COOKIE_CONSENT.CMP_CONFIG_DELETE", "premium.PlansManagementApi.cancelAllTpasOfSite", "LIVE_VIDEO.CHAT", "BLOG.EDIT_POST_SETTINGS", "GENIE.CONVERSATION_MESSAGE_READ", "AUTHORIZATION.DELETE_POLICY_ASSIGNMENTS", "premium.PlansPackagePickerControllers.changePlanBySite", "ENTITLEMENTS.ENTITLEMENT_DELETE", "SIDEBAR.VIEW-TRIGGERED-EMAILS", "WIX_FORMS.FORM_SCHEMA_UPDATE", "POS.MOBILE_READER_MANAGE", "GENIE.BUSINESS_INSIGHTS_READ", "VELO.SPI_CONNECTION_CREATE", "PARTNERS.MARKETPLACE_CLIENT_CREATE", "BOOKINGS.BOOKING_DECLINE", "BOOKINGS.AVAILABILITY_READ_TIME_SLOTS", "PROMOTE.GOOGLE_ADS_EVENT_REPORTER_MANAGE", "premium.GoogleMailboxesEmailSender.getManualRecurringReminderEmail", "REVIEWS.UPDATE_REVIEW", "BRANDED_APPS.UNOFFICIAL_APPLE_CREATE_APP", "TABLE_RESERVATIONS.RESERVATION_LOCATION_READ_FULL", "SIDEBAR.VIEW-SUBSCRIPTIONS-APP", "HTML_EDITOR.DISTRIBUTE", "WIX_DATA.REMOVE_REFERENCE", "BRANDED_APPS.DELETE_LOGIN_SECRETS", "ECOM.GET_ELIGIBLE_TRIGGERS", "SIDEBAR.ENABLE_RESERVE_WITH_GOOGLE", "AUTOCMS.RULES_READ", "ECOM.SHIPPING_OPTION_DELETE", "WIX_DATA.RESOURCE_USAGE_READ", "premium.transferSite.acceptPremiumSiteTransfer", "blog-importer.read", "ACCOUNT_MANAGER.VIEW_API_KEYS_ON_SIDEBAR", "WIX_ATLAS.REVERSE_GEOCODING", "WIX_DATA.REGISTER_CONNECTOR", "SIDEBAR.VIEW_GOOGLEFORMERCHANTS_CHANNEL", "ENTERPRISE.MONITORING_READ", "premium.PlansManagementApi.getPlanBySiteId", "ACCOUNT_DATA_LOCALITY.VIEW", "premium.DigitalGoodsBillingAndPaymentsApi.getByUser", "BILLING.TAX_MIGRATION_INFO_READ", "PAYMENTS.DISPUTES_UPLOAD_EVIDENCE", "SIDEBAR.ENABLE-SEO", "WIX_FORMS.FORM_SCHEMA_CREATE", "BLOG.UPLOAD-FILE", "premium.PlansBoApi.addPlanUpgradePaths", "SIDEBAR.VIEW-BLOG-DRAFTS", "GOOGLE_MAILBOX_MANAGEMENT_API.CHANGE_PASSWORD", "SIDEBAR.VIEW-VIDEO-INSIGHTS", "BRANDED_APPS.READ_PARTNER_APPS", "HTML_EDITOR.QUERY_PROTECTED_PAGES", "BILLING.AVALARA_TAX_GROUPS_MAPPINGS_UPDATE", "POS.SETTINGS-MANAGE-TAX", "DOCUMENT.MODIFY_SEO", "IAM.SECURITY_POLICY_UPDATE", "CORVID.NPM-REQUESTS-ADD", "ECOM.MODIFY_FULFILLMENTS", "WIX_FORUM.CATEGORY_CREATE_POST", "billing.tokenize", "SMS_PROVIDER.CHECK_FEATURE_VIABILITY", "MY_ACCOUNT.VIEW_HTML_EMBEDS", "secrets-vault.delete-secret", "GENIE.AGENT_MEMORY_MANAGE", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.GETCANCELPURCHASEEMAIL", "SIDEBAR.VIEW-ALBUM-STORE", "WIX_FORUM.COMMENT_EDIT", "SIDEBAR.ENABLE-DATABASES", "BOOKINGS.BOOKING_CREATE_OVERRIDE_BOOKING_STATUS", "PARTNERS.PARTNER_REVSHARE_PAYOUTS_READ", "site-actions.create-site", "DEV_CENTER.MANAGE_APPS", "WIX_COMMENTS.COMMENT_HIDE", "SIDEBAR.ENABLE-MUSIC-SETTINGS", "SIDEBAR.VIEW-PURCHASED-PLANS", "LOYALTY.READ_OWN_ACCOUNT", "MEDIA.ENTERPRISE_MEDIA_ITEMS_READ", "DISCOVERY.DELETE", "onboarding.open", "BENEFIT_PROGRAMS.PROGRAM_RENEW", "premium.VouchersDomainsApi.getDomainVouchersCount", "WIX_DATA.UPDATE_CONNECTOR", "SIDEBAR.ENABLE_LOYALTY", "premium.RegDotRuPremiumApiFacade.notifyDomainDeleted", "PAYMENTS.PAYMENT_METHOD_READ_SAVED_PAYMENT_METHOD", "MODERATION.ASSIGN_MODERATOR", "SIDEBAR.VIEW-MANAGE-PLANS", "BOOKINGS.BOOKING_CANCEL", "COOKIE_CONSENT.CMP_CONFIG_CREATE", "WIX_HOTELS.MANAGE_LOGS", "PAYMENTS.MERCHANT_CATEGORY_CODES_READ", "SIDEBAR.ENABLE-PARTNERS-BETA", "my-account.view-workflows", "WIX_NFT.COLLECTIONS_READ", "premium.StoreMailboxService.getMailboxSaleTypeForSite.siteLevel", "secrets-vault.get-secret-value", "BRANDED_APPS.GET_STORES_INFO", "premium.MsnPremiumServices.doesUserQualifyForMsnOffer", "premium.PremiumWizApi.getUserPremiumInfoHistory", "WIX_QUOTES.MANAGE", "my-account.tag-contact", "BOOKINGS.MANAGE_OWN_BOOKINGS", "WIX_QUOTES.VIEW", "WIX_STORES.INVENTORY_READ", "calendar.read-linked-sessions", "BOOKINGS.CATALOG_READ", "CONTACTS_SEGMENTS.PROCESS", "WIX_DATA.DRIVER_GET_ITEM", "BLOG.DELETE_OWN_POST_COMMENTS", "DOMAIN_AUTHENTICATION.GET_DNS_RECORDS", "VELO.PAGE_CSS_DEV_READ", "WIX_STORES.OPTION_CREATE", "ECOM.PICKUP_LOCATION_UPDATE", "MARKETING_TAGS.READ", "RESTAURANTS.AVAILABILITY_EXCEPTION_CREATE", "SIDEBAR.VIEW-RESTAURANTS-RESERVATIONS", "LOYALTY.READ_AUTOMATIONS", "IDENTITY.SESSION_REVOKE", "ECOM.ITEM_DISCOUNT_READ", "WIX-GROUPS.EDIT_GROUPS_GENERAL_SETTINGS", "DOMAINS.READ_CONFIRMATION_PROCESSES", "CRM_AUTOMATIONS.RECIPES_REPOSITORY", "PAYMENTS.DISPUTE_CASES_ADD_EVIDENCE", "WIX_STORES.CUSTOMIZATION_CREATE", "SIDEBAR.ENABLE_MANAGE_WORKING_SCHEDULE", "RESTAURANTS.OPERATION_UPDATE", "RELEASE_MANAGER.CREATE_RC", "WIX_CLI.CLI_TOKEN", "html-editor.preview", "PORTFOLIO.COLLECTION_UPDATE", "WIX_DATA.SHARED_DATA_COLLECTION_CREATE_POLICY", "SIDEBAR.ENABLE-BLOG-TRASH", "premium.PremiumMsnServices.addNewUser", "premium.RefundBackofficeApi.rejectServiceRefundById", "SIDEBAR.ENABLE-CONTACT-LIST", "premium.PlansPackagePickerControllers.changePlanBySite.siteLevel", "ANALYTICS_AND_REPORTS.VIEW_BASIC", "WIX_MULTILINGUAL.EXPORT_TRANSLATABLES", "WIX_FORUM.CATEGORY_READ_ALL", "MEMBERS.MEMBER_ABOUT_MANAGE", "SIDEBAR.ENABLE-STORES-PRODUCTS", "BILLING.AVALARA_TAX_RULES_MAPPINGS_DELETE", "BILLING.ESTIMATE_TAX", "BRANDED_APPS.GET_FRESH_SESSION", "SIDEBAR.ENABLE_SHARED_GALLERY", "WIX-POLLS.READ_RESULTS", "WIX_STORES.CUSTOMIZATION_DELETE", "WIX_DATA.CANCEL_BACKUP", "TIPS.READ_SETTINGS", "BOOKINGS.MANAGE_CATEGORIES", "WIX_STORES.BRAND_GET_OR_CREATE", "WIXSTUDIO.CLIENT_KIT_RESOURCE_CREATE", "POS.POS_SETTINGS_READ", "WIX-FORUM.POST-TOGGLE-COMMENTS", "BENEFIT_PROGRAMS.POOL_DEFINITION_READ", "BOOKINGS.BOOKING_UPDATE_EXTENDED_FIELDS", "BLOG.PUBLISH-POST", "SIDEBAR.ENABLE-STORES-ANALYTICS", "ECOM.CHECKOUT_TEMPLATE_CREATE", "BRANDED_APPS.GENERATE_SCREENSHOTS", "TOPICS.DELETE", "MetaSite.List", "SIDEBAR.ENABLE_RESTAURANTS_MENUS_SHOWCASE", "SIDEBAR.ENABLE_BOOKINGS_APPS_PAGE", "CALENDAR.PARTICIPATION_READ", "BILLING.AVALARA_TAX_CREDENTIALS_READ", "SMS_PROVIDER.GET_QUOTA_INFO", "BOOKINGS.ATTENDANCE_SET", "community.view-profiles", "EDITOR.DEPLOYMENT_PUBLISH", "WIX_STORES.VARIANTS_READ_USER_DATA", "premium.SubscriptionsManager.unassignFromSite", "premium.PremiumTpaManager.getOneTimePackages", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_REMOVE_BOOKINGS", "SIDEBAR.VIEW-SHOUTOUT", "premium.SubscriptionsManager.turnAutoRenewOn", "CHALLENGE-READ.GET-CHALLENGE", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.INITIAL_DATA_ACCOUNT", "wix-stores.read-inventory", "my-account.view-stores-analytics", "premium.PlansDashboardApi.getUserPackages", "MEMBERS.DEFAULT_PRIVACY_STATUS_WRITE", "premium.PlansDealerApi.getTpaDataForDealer", "DEV_CENTER.TEST", "PAYMENTS.TOPUPS_CREATE_FOR_SITE", "WIX_RESTAURANTS.SERVICE_FEES_READ", "PAYMENTS.SAVED_PAYMENT_METHOD_READ", "SIDEBAR.ENABLE_WIX_COMMENTS", "BOOKINGS.LOCKS_DELETE", "BOOKINGS.LOCKS_UPDATE", "premium.PremiumUserHighPriorityNotifier.notifyOnIncreasePrice", "REFERRALS.READ_REFERRED_FRIENDS", "INSTAGRAM_ACCOUNTS.LIST_PROFILES", "BOOKINGS.LOCKS_CREATE", "BILLING.AVALARA_TAX_RULES_MAPPINGS_CREATE", "SIDEBAR.VIEW-BLOG-TRASH", "WIX_STORES.RIBBON_DELETE", "LOYALTY.REDEEM_COUPON", "wix-restaurants.manage-call-center", "MEMBERS.MEMBER_TO_MEMBER_BLOCKS_READ", "WIX_COMMENTS.COMMENT_COUNT", "MEMBERS.CUSTOM_FIELDS_HIDE", "ECOM.MODIFY_CHECKOUT_COMPOSER_SCHEMA", "premium.PremiumGoogleMailBoxService.getTotalSeatsCount", "ENTERPRISE.MEDIA_VIEW", "FAQ.DELETE_CATEGORY", "PROMOTE.MULTICHANNEL_CAMPAIGN_READ", "PROMOTE.SENDER_DETAILS_CREATE", "APPS_INSTALLER.INSTALL_ACCOUNT_LEVEL", "PORTFOLIO.SETTINGS_UPDATE", "BRANDED_APPS.WRITE_STORES_CONFIG", "TABLE_RESERVATIONS.RESERVATION_CREATE", "SITE_BRANCHES.LIST_BRANCHES_INCLUDING_DELETED", "premium.DigitalGoodsCustomerApi.debugAddLogoBuilderSku", "SCIM.GROUP_READ", "SIDEBAR.VIEW_CHAT_INSTALLATION_ENTRY", "SIDEBAR.VIEW-TRANSACTIONS", "premium.RefundBackofficeApi.getTopPendingApprovedRefundRequests", "SIDEBAR.ENABLE-SITE-MEMBERS", "premium.BoToMsnService.getMsnDnsRecords", "GENIE.CONVERSATION_MESSAGE_MANAGE", "SIDEBAR.VIEW-BOOKINGS-STAFF-AVAILABILITY", "premium.MailboxPurchasePageControllers.loadMailboxAddSeatsPurchasePageV2", "PREMIUM.GOOGLE_SUBSCRIPTION_READ", "REFERRALS.MANAGE_REFERRING_CUSTOMERS", "AUTOMATIONS.VELO_ACTION_TEST", "SCIM.SCIM_SETTINGS_ENABLE", "BOOKINGS.SERVICE_OPTIONS_AND_VARIANTS_DELETE", "MEDIA.ENTERPRISE_MEDIA_ITEMS_UPDATE_CATEGORIES", "BILLING.TAX_SETTINGS_READ", "WIX_STORES.PRODUCT_OPTION_DELETE", "wix-stores.read-carts", "ECOM.READ_ADDITIONAL_FEES", "CONTACTS_SEGMENTS.UPDATE", "premium.PlansPurchasePageControllers.plansGracePeriodPurchasePage.siteLevel", "ECOM.ADJUSTMENT_CREATE", "ECOM.PICKUP_LOCATION_READ", "premium.PremiumMailboxApi.getMailboxPackagesByUser", "ECOM.GET_APPLIED_SCOPES", "PARTNERSE.PARTNER_QUALITY_READ", "POS.MANAGE-PRODUCTS-COLLECTIONS", "premium.GoogleMailBoxRefundApi.setAutoRenewOffBiData", "AUTOCMS.FOLDER_UPDATE_REFERENCE", "SIDEBAR.ENABLE-TRANSACTIONS", "CHALLENGE-MANAGE.REMOVE-FROM-CHALLENGE", "RESTAURANTS.ITEM_LIST", "wix-stores.read-products", "premium.getManagePlansBillingInfo", "WIX_FORMS.FORM_SCHEMA_TEMPLATE_READ", "WIX_FORUM.CATEGORY_READ", "PAYMENT_LINKS.PAYMENT_LINK_UPDATE_EXTENDED_FIELDS", "SIDEBAR.VIEW-HOTELS", "WIX_STORES.BRANDS_GET_OR_CREATE", "PAYMENTS.PAYMENT_ACCOUNTS_SITE_VIEW", "CASHIER.ONBOARDING_AVAILABILITY_UPDATE_RG_FLOW", "TABLE_RESERVATIONS.RESERVATION_RESERVE", "premium.GoogleMailboxesEmailSender.getInitialPurchaseManualPackageEmail", "WIX_STORES.VARIANT_SET", "WIX_STORES.MARKETPLACE_PRODUCT_OVERRIDES_READ", "GIFT_CARDS_PROXY.READ", "my-account.open-photo-album", "WIX_DATA.DROP_INDEX", "WIX-GROUPS.DELETE_GROUP", "SIDEBAR.VIEW-BLOG-PUBLISHED", "BRANDED_APPS.CREATE_LOGIN_SECRETS", "QUESTIONS.READ", "LOYALTY.MANAGE_IMPORTS", "SITE_BRANCHES.CREATE_BRANCH", "DEV_CENTER.DELETE_APP_INVITE", "CONTACTS_SEGMENTS.VIEW", "my-account.create-tag", "wix-stores.read-subscriptions", "WIX-FORUM.POST-REPORT", "WIX_PARTNERS.BETA_PRODUCT_READ", "APP_INSTANCES.READ", "BOOKINGS.ATTENDANCE_READ", "premium.UserPremiumAssetsService.listUserPremiumAssets", "VLEO.NPM_REQUESTS_WRITE", "WIX_STORES.MODIFY_FULFILLERS", "my-account.view-banners", "PREMIUM.RESELLER_MANAGEMENT_GET_BRANDING_INFO", "SIDEBAR.ENABLE-SUBSCRIPTIONS-APP", "WIX_DATA.REMOVE", "PARTNERS.PARTNER_QUALITY_UPDATE", "WIX_RESTAURANTS.MANAGE_ORDER_SETTINGS", "premium.GoogleMailboxesEmailSender.getNearCancellationEmail", "premium.purchase-account-plans", "SITE_ACTION.SITE_GET_FEEDBACK", "MEDIA.ENTERPRISE_MEDIA_CATEGORIES_UPDATE_ITEMS", "ECOM.CREATE_ORDER_FROM_CHECKOUT", "premium.MsnMailerClient.getAboutToBeCanceledEmail", "PRICING_PLANS.CUSTOM_FORM_SUBMISSION_UPDATE", "premium.TransferSiteStoreService.getTransferRequestDetails", "WIX_DATA.GET_SANDBOX_MODE", "my-account.open-wix-music", "WIX-GROUPS.INVITE_MEMBER", "SITE_BRANCHES.GET_BRANCH", "EDITOR.UPLOAD_FILE", "PARTNERS.MANAGE_MARKETPLACE_LEADS", "BUSINESS_MANAGER.CONTACTS_LABELS.LABELS_WIDGET", "BLOG.EDIT-CATEGORY", "WIX_FORUM.CATEGORY_CREATE_POST_WRITE_PROTECTED", "PROMOTE.MULTICHANNEL_CAMPAIGN_DELETE", "ENTITLEMENTS.ENTITLEMENT_RESERVE", "MEDIA.SITE_MEDIA_FOLDERS_READ", "ECOM.UPDATE_CHECKOUT_SETTINGS", "STAFF_MEMBERS.STAFF_MEMBER_DELETE", "BOOKINGS.SITE_ROLLOUT_STATUS_UPDATE", "GROUPED_BOOKINGS.GROUPED_BOOKINGS_CREATE", "GENIE.CONVERSATION_MANAGE", "ECOM.DRAFT_ORDERS_MODIFY_ITEMS", "contacts-filters.modify", "SITES.MOVE", "SIDEBAR.ENABLE-TRIGGERED-EMAILS", "EDITOR.PAGE_METADATA_READ", "premium.PlansPackagePickerControllers.UpgradePlan", "BOOKINGS.BOOKING_POLICY_SNAPSHOT_READ", "DOCUMENT.UPDATE_ROUTERS", "premium.VouchersDomainsApi.getServiceVouchers", "WIX_COMMENTS.COMMENT_PUBLISH", "EDITOR.USE_OPENAI_LANGUAGE_MODELS", "WIX_FORUM.COMMENT_DELETE_ALL", "SIDEBAR.VIEW-APP-MARKET", "WAIVER.VIEW", "POS.SEND_STAFF_MEMBERS_TIPS_REPORT", "premium.VouchersBoApi.addSupportedSKUsToSiteBooster", "premium.manageLicense.bo", "SIDEBAR.ENABLE-GOOGLE-MY-BUSINESS", "GIFT_CARDS_PROXY.MODIFY", "POS.ACCOUNT_READ", "premium.VouchersReadOnlyApi.getUserVouchers", "premium.PlansBoApi.removeProductTpa", "EDITOR.PUBLISH_BRANCH", "secrets-vault.view-secret-metadata", "QUESTIONS.GET_FEED", "WIX_DATA.GET_APP_COLLECTION_VISIBILITY", "WIX-FORUM.COMMENT-DELETE", "premium.PlansStoreApi.isVerticalPackage", "premium.PlansPackagePickerControllers.loadPlansPackagePickerFromTpa", "REVIEWS.REVIEW_REQUEST_CANCEL", "premium.PlansEmailSender.getRecurringFailureEmail", "site-users.remove-self", "PREMIUM.DYNAMIC_OFFERING_CHECKOUT_PAGE_BY_ACCOUNT", "WIX_STORES.BRANDS_CREATE", "BRANDED_APPS.UPDATE_LOGIN_SECRETS", "DEVCENTER.VERIFY_INSTANCE", "SIDEBAR.VIEW-PHOTO-ALBUMS", "POS.POS_SETTINGS_CREATE", "POS.MANAGE-DISCOUNTS", "SIDEBAR.ENABLE-CONSENT-POLICY-SETTINGS", "SCIM.GROUP_DELETE", "my-account.manage-html-embeds", "ACCESSIBILITY.WIZARD_REPORT_READ", "premium.PlansPackagePickerControllers.loadPlansPackagePickerWithSiteId", "ONBOARDING.DELETE", "PAPYRUS.READ_DOCUMENT", "VELO.APP_PAGES_DIFF", "SIDEBAR.ENABLE_BILLING_OVERVIEW", "RESTAURANTS.DISPLAY_SETTINGS_CREATE", "premium.MsnStoreServices.getActiveUserPackage", "WIX_STORES.READ_FULFILLERS", "WIX_DATA.GET_DATA_MODE", "premium.PlansBoApi.setPlanUpgradePaths", "WIX_FORUM.POST_PIN", "SCIM.USER_READ", "ACCESSIBILITY.MONITORING_REPORT_CREATE", "premium.DomainsPlansAssignmentApi.beforeDisconnectPlanFromSite", "WIX_STORES.CATALOG_MARKETPLACE_FEED_GENERATE", "SIDEBAR.VIEW_BLOG_TAGS", "MEMBERS.MEMBER_UPDATE_PRIVATE", "ECOM.CHECKOUT_CONTENT_READ", "BRANDED_APPS.READ_DASHBOARD_STORE", "ECOM.ABANDONED_CHECKOUT_DELETE", "PAYMENTS.ACCOUNT_READ", "premium.GoogleMailboxCustomerApi.getCustomer", "my-account.enable-inbox", "ECOM.DRAFT_ORDERS_CREATE_ADDITIONAL_FEES", "MEMBERS.MEMBER_READ_FULL_SET", "SIDEBAR.VIEW_ECOM_GIFTCARDS_PERMISSION", "PARTNERS.MANAGE_PROFILE", "PREMIUM.GET_PLAN_DOWNGRADE_BILLING_CYCLE_UPCOMING_RENEWAL_EMAIL", "WIX_STORES.INFO_SECTION_DELETE", "WIX_FORMS.LIST_FORMS", "REVIEWS.VALIDATE_FILE", "FAQ.READ_CATEGORIES", "FILE_SHARE.VIEW", "premium.PremiumUserManager.getUserPackageDTOBySiteLocalized", "shoutout.manage", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.ASSIGN_PLAN", "CHALLENGE_MANAGE.UPDATE_SECTION", "premium.MsnMailerClient.getActivationEmail", "CONTACTS.SEGMENT_COLLECTION_CREATE", "BLOG.READ_SETTINGS", "premium.MsnStoreServices.checkOrderParams", "ECOM.READ_SHIPPING_RULES", "MEDIA.SITE_MEDIA_FOLDERS_REMOVE_FROM_TRASH", "GENIE.KNOWLEDGE_MANAGE", "WIX_STORES.PRODUCT_READ_NOT_VISIBLE", "team.manage-team-member-roles", "premium.VouchersBoApi.copyActiveVouchers", "BUSINESS_MANAGER.VIEW_INVOICES_IN_CONTACTS_DETAILS", "premium.PremiumUserHighPriorityNotifier.notifyOnChargeFailure", "wix-events.manage", "WIX_EVENTS.READ_AGENDA", "SIDEBAR.VIEW_BOOKINGS_ANYWHERE_SETTINGS", "BILLING.TAX_MIGRATION_INFO_CREATE", "ECOM.SHIPPING_OPTION_READ", "PAYMENTS.REFUND_GET_REFUNDABILITY", "SIDEBAR.ENABLE-SOCIAL-SETTINGS", "WIX_STORES.STORES_LOCATION_UPDATE", "premium.PlansManagementApi.setAutoRenewOn", "LOYALTY.READ_TIERS", "BENEFIT_PROGRAMS.POOL_PAUSE", "BILLING.TAX_REGIONS_READ", "WIX_STORES.READ_INVENTORY", "BOOKINGS.LOCKS_READ", "premium.disconnectPlanFromSite", "BENEFIT_PROGRAMS.BALANCE_CHANGE", "ECOM.VIEW_ELIGIBLE_MEMBERSHIPS", "SIDEBAR.VIEW_LOYALTY", "RESTAURANTS.SETTINGS_CREATE", "WIX_EVENTS.READ_CATEGORIES", "premium.AppMarketTempApi.updateCurrentTpaSkusInAppPurchaseFlag", "member-fields.modify", "BILLING.TAX_MIGRATION_INFO_DELETE", "WIX-FORUM.POST-DELETE", "WIX_DATA.BULK_GET_COLLECTIONS_BY_SNAPSHOTS", "ACCOUNT_AUTH_SETTINGS.GET_SETTINGS", "WIX_STORES.CHANNELS_PRODUCT_GATEWAY_SYNC", "SIDEBAR.VIEW_BOOKINGS_RESOURCE_MANAGEMENT", "SIDEBAR.ENABLE-INBOX-SETTINGS", "MULTI_SERVICE_BOOKINGS.MULTI_SERVICE_BOOKING_DECLINE", "ANALYTICS_AND_REPORTS.CAN_SUBSCRIBE_DIGEST", "CHALLENGE-READ.FIND-CHALLENGE", "SIDEBAR.VIEW-SEO", "WIX_HOTELS.VIEW_TAX_CATEGORIES", "MEDIA.SITE_MEDIA_FILES_UPDATE", "PAYMENT_LINKS.PAYMENT_LINK_EXPIRE", "WIX_STORES.SEND_ORDER_EMAIL", "paid-plans.view-member-benefits", "premium.PlansStoreApi.getPackageFeatures", "ECOM.MODIFY_PAYMENT_GATEWAY_ORDERS", "PROPOSALS.PROPOSAL_TEMPLATE_DELETE", "PAYMENTS.DISPUTE_CASES_READ_COMPILED_EVIDENCE_DOCUMENT", "SIDEBAR.VIEW_MANAGE_WORKING_SCHEDULE", "coupons.manage", "COOKIE_CONSENT.CMP_CONFIG_UPDATE", "SALESFORCE.CONNECTION_READ", "ECOM.CHECKOUT_TEMPLATE_READ", "premium.PlansPurchasePageControllers.verifyPlansDoublePurchase.siteLevel", "premium.BoToMsnService.getEmailSkus", "CHALLENGE-PARTICIPATE.COMPLETE-PARTICIPANT-STEP", "BRANDED_APPS.SUBMIT", "PING.READ_BROADCAST_LIST_COMPONENTS", "PREMIUM.DISPLAY_ATTRIBUTES_READ_TRANSLATED", "SIDEBAR.VIEW-MUSIC", "premium.PlansPurchasePageControllers.renderPlansDirectPurchasePage.siteLevel", "premium.PaymentsHistoryApi.getInvoiceDetails", "my-account.view-invoice-settings", "POS.SETTINGS-MANAGE-TEAM-ACCESS-SETTINGS", "DATA_EXTENSION_SCHEMA.WRITE", "BRANDED_APPS.BUILD_APP", "SIDEBAR.VIEW-BLOG-POSTS", "EXPERTS.FEEDBACK_COMMENTS", "INBOX.READ_CONVERSATIONS", "wix-stores.manage-store", "my-account.get-tag", "wix-hotels.manage", "PAYMENTS.TOPUP_CREATE", "SIDEBAR.VIEW-MULTILINGUAL-SETTINGS", "WIX_FORUM.DRAFT_POST_DELETE", "SIDEBAR.VIEW-SEO-TOOLS", "CORVID.RELEASE-MANAGER-VIEW", "community.manage-settings", "recurring-invoices.manage", "premium.PremiumUserManager.unAssignPlanFromSite", "WIX_STORES.READ_POS_VISIBILITY", "WIX_DATA.DELETE_BACKUP", "premium.GoogleMailboxToBoApi.getUniqueValidPackageByDomainName", "PRICING_PLANS.CUSTOM_FORM_DELETE", "premium.MsnPremiumServices.doesUserQualifyForMsnOfferWithCountry", "BILLING.AVALARA_TAX_MERCHANT_CREDENTIALS_CREATE", "MEMBERS.CUSTOM_FIELDS_WRITE_SITE_SETTINGS", "my-account.view-premium-plans", "MetaSite.Delete", "BOOKINGS.FORMS_DELETE", "premium.PremiumManagementEmailSenderService.sendEmail", "RATING.RATING_GET_NAMESPACE_SUMMARY", "PROMOTE.FACEBOOK_ADS_CAMPAIGN_READ", "PAYMENTS.DISPUTE_CASES_READ", "PORTFOLIO.SYNCED_PROJECTS_READ", "my-account.view-price-quotes", "ECOM.MODIFY_TRANSACTIONS", "PROMOTE_GBP_FEATURE.FEATURE_DELETE", "BENEFIT_PROGRAMS.PROGRAM_UPDATE", "premium.ChangePlanControllers.switchAndRefund", "WIX_RESTAURANTS.MANAGE_POS", "premium.ChangePlanControllers.switchInGracePeriod", "premium.FeaturesManager.IsEligible", "PAYMENTS.TRANSACTIONS_REFUND", "BOOKINGS.AVAILABILITY_CONCRETE_SLOTS", "PROMOTE_GBP_FEATURE.FEATURE_CREATE", "WIX_DATA.LIST_DRIVER_SCHEMAS", "BLOG.EDIT-RCE-SETTINGS", "BOOKINGS.CANCEL_OWN_BOOKINGS", "CHANNELS_TOKEN.TOKEN_AUTHORIZE", "WIX_PARTNERS.READ_PARTNER_ACCOUNT", "BRANDED_APPS.SITE_COLORS", "WIX_FORMS.SUBMISSION_UPDATE_ANY", "premium.PlansPackagePickerControllers.UpgradePlan.siteLevel", "SIDEBAR.VIEW-FORUM", "STUDIO.VIEW_PAYMENTS", "PAYMENTS.PAYMENT_AGREEMENT_READ", "IDENTITY.GROUP_READ", "MEDIA.SITE_MEDIA_FOLDERS_UPDATE", "VELO.SPI_CONNECTION_DELETE_FILES", "WIX_STORES.VIEW_ORDER_EMAIL_TEMPLATES", "secrets-vault.create-secret", "CONTACTS_SEGMENTS.CREATE", "WIX_FLOWS.FLOW_CONTEXT_INIT", "Account.AddTeamMember", "SITE_PROPERTIES.UPDATE_BUSINESS_PROFILE", "contacts-filters.view", "DEV_CENTER.READ_COMPONENT", "premium.PremiumAccountStatusController.preform", "contacts.modify", "SCOPE_WIX_STORES.READ", "IAM.ENABLED_CONNECTIONS_READ", "MEMBERS.CUSTOM_FIELDS_UPDATE", "BRANDED_APPS.READ_MOBILE_CONFIG", "MEMBERS.ABOUT_READ", "OPEN_AI_CLIENT.EDIT_ACCOUNT_LEVEL", "premium.GenericPurchasePageService.createCheckout", "ANALYTICS_AND_REPORTS.GET_PARTNER_DIGEST_CONFIG", "community.manage-profiles", "wix-stores.modify-inventory", "EDITOR.DEPLOYMENT_LIST", "TASKS.REPORT_COMPLETION", "WIX_FORUM.POST_SUBSCRIBE", "CONTACTS.SUBMIT", "RESTAURANTS.SECTION_CREATE", "SIDEBAR.ENABLE-RESTAURANTS-DISCOUNTS", "REVIEWS.READ_CONFIGURATION", "PREMIUM.CREATE_PAYMENT_REQUEST_TOKEN", "WIX_HOTELS.VIEW_PROMOTION_CODES", "BRANDED_APPS.GET_DOMAIN_VERIFICATION", "DOMAINS.PUBLIC_API_PERMISSION_SITE", "BOOKINGS.REQUEST_PAYMENT", "BOOKINGS.BOOKING_POLICY_SET_DEFAULT", "SIDEBAR.ENABLE-CODE-EMBEDS-SETTINGS", "PROMOTE.SENDER_EMAILS_DELETE", "IAM.CONNECTION_CONFIG_UPDATE", "SIDEBAR.VIEW-STORE-ORDERS", "SIDEBAR.ENABLE-FORUM", "LOYALTY.READ_COUPONS", "MEMBERS.ABOUT_MANAGE_DRAFT", "RESTAURANTS.MENU_ORDERING_SETTINGS_DELETE", "CRM_TASKS.TASK_CREATE", "WIX_DATA.BULK_GET_DRIVER_SCHEMAS", "PREMIUM.GOOGLEMAILBOXESEMAILSENDER.MIGRATIONCOMPLETED", "Account.ListTeamMembers", "BENEFIT_PROGRAMS.PROGRAM_DEFINITION_UPSERT", "premium.PlansBoApi.getAllUpgradePaths", "PORTFOLIO.PROJECT_ITEM_READ", "SIDEBAR.VIEW-APPS", "PARTNERS.PARTNER_PREMIUM_SITE_CONTRIBUTIONS_READ", "WIX_FORUM.CATEGORY_DELETE", "premium.TransferSiteController.createTransferSitePaymentDetailsUrl", "premium.RegDotRuPremiumApiFacade.setResourceRecords", "ACCOUNT_MANAGER.VIEW", "WIX_RESTAURANTS.MANAGE_CATALOGS", "PROMOTE.GOOGLE_ADS_ACCOUNT_READ", "FOLDERS.MOVE", "CRM_NOTES.NOTE_UPDATE", "EDITOR_ENV.MANAGE", "hive.ajax", "FAQ.DELETE_QUESTION", "DOCUMENT.READ_SETTINGS", "PROMOTE.CALENDAR_READ", "APP_MARKET.INSTALL_APP", "premium.WixDealerService.changePlanGetCurrentPPWithoutSale", "WIX_CLI.DEVICE_VERIFY", "BILLING.TAX_RULE_UPDATE", "CALENDAR.EVENT_CREATE_OWN", "BOOKINGS.RESOURCES_CATALOG_READ_WITH_CONFERENCE_DATA", "BRANDED_APPS.WRITE_BUILD_CONFIG", "SIDEBAR.ENABLE_REVIEWS", "SIDEBAR.VIEW_BOOKINGS_LIST", "PARTNERS.PARTNERS_PROGRAM_ACHIEVEMENT_UPDATE", "SIDEBAR.ENABLE_ASCEND_ZERO_STATE", "contacts-schema.view", "SIDEBAR.VIEW-MUSIC-SETTINGS", "SITEMORPHOSIS.OPT_IN", "BENEFIT_PROGRAMS.PROGRAM_DEFINITION_DELETE", "IAM.APPROVE_IDENTITY", "WIX_NFT.COLLECTIONS_MODIFY", "premium.GenInvoiceListControllerBase.internalHandleRequest", "PREMIUM.CHARGE_OVERVIEW.READ", "PARTNERS.PARTNERS_PROGRAM_ACHIEVEMENT_READ", "CRM_FINANCIAL.INVOICES_READ", "premium.PremiumTpaManager.getTpaOfferingStatus", "DOMAIN_AUTHENTICATION.CHECK_AUTHENTICATION", "premium.InternalConnectDomainApi.domainBasicValidations", "PAPYRUS.DELETE_DOCUMENT", "WIX_HOTELS.VIEW_RATE_PLANS", "SIDEBAR.ENABLE_AMAZON_CHANNEL", "WIX_STORES.VARIANTS_UPDATE", "premium.PremiumUserManager.getUserPackages", "PROMOTE.SENDER_EMAILS_GET_OR_CREATE", "premium.PlansRefundApi.getPurchasePlans", "SIDEBAR.ENABLE-CHALLANGES", "BOOKINGS.BOOKING_BULK_CREATE", "BOOKINGS.BOOKING_FEE_APPLY_TO_ORDER", "premium.GenericWixPurchasePageService.createWixCheckout", "CONTACTS_SCHEMA.MODIFY", "POS.SETTINGS-MANAGE-RECEIPTS", "premium.PremiumMsnRpc.createMsnServiceConfigurationRecords", "BOOKINGS.STAFF_MEMBER_DELETE", "EDITOR.CLONE_BRANCH", "QUIZZES.CREATE_QUIZ", "premium.MailboxSubscriptionUserService.getSubscriptionUsers", "premium.FeaturesManager.GetFeature", "team.delete-self", "SIDEBAR.ENABLE-INSTAGRAM-CHANNEL", "ACCOUNT_ROUTING.ROUTE_UPDATE", "my-account.export-contacts", "TABLE_RESERVATIONS.RESERVATION_CANCEL", "MODERATION.CREATE", "one-app.invite-member", "WIX_EVENTS.READ_AVAILABLE_TICKET_DEFINITIONS", "PAYMENT_LINKS.PAYMENT_LINK_SETTINGS_MANAGE", "WIX_RESTAURANTS.RESTAURANT_LOCATIONS_READ", "team.accept-invite", "ENTERPRISE.SECURITY_HEADERS_WRITE", "WIX_EDUCATION.VALIDATE_USER_COLOR", "CALENDAR.READ_EXTERNAL_CALENDAR_EVENTS_PI", "SIDEBAR.ENABLE-WORKFLOWS", "RATING.DEFINITION_DELETE", "premium.SitePropertiesInternalApi.getSiteDisplayName", "team.view-invites", "PARTNERS.PROPOSALS_CREATE", "PING.TEMPLATE_READ_BY_APP", "WIX_HOTELS.VIEW_OVERVIEW_PAGE", "SMS_ACTION_PROVIDER.GET_MESSAGE_DATA", "my-account.enable-tasks", "WIX-FORUM.POST-CREATE-COMMENT", "STUDIO.VIEW_CLIENT_BILLING", "premium.ExternalInvoicesApi.getByUserGuid", "ENTITLEMENTS.ENTITLEMENT_END", "WIX-FORUM.CATEGORY-EDIT", "PARTNERS.PROJECT_NOTE_CREATE", "RESTAURANTS.AVAILABILITY_EXCEPTION_UPDATE", "PREMIUM_MANAGEMENT.PAYMENT_METHODS_SHARE_PAYMENT_METHOD", "WIX_DEVELOPERS.MARKET_APPS_READ", "premium.MsnToDashboardApi.getMailboxInfoByUser", "EDITORX.INSPECTOR_TAB_LAYOUT_AND_DESIGN", "premium.WixDealerController.saleInfo", "PREMIUM.CANCEL_ASSET", "SIDEBAR.ENABLE-ALBUM-DASHBOARD", "WIX_MULTILINGUAL.SCHEMA_READ", "premium.PremiumStoreApi.getFormattingSettings", "FAQ.CREATE_QUESTION", "WIX_FORMS.SPAM_SUBMISSION_REPORT_NOT_SPAM", "MEDIA.ENTERPRISE_MEDIA_CATEGORIES_READ", "ECOM.CUSTOM_TRIGGERS_READ", "WIX_DATA.BULK_INSERT_REFERENCES", "ECOM.CHECKOUT_TEMPLATE_UPDATE", "premium.userHasUnattachedDomains", "AUTHORIZATION.ASSIGN_POLICIES_ON_SUB_ACCOUNTS", "SIDEBAR.VIEW_TIPS_PERMISSION", "VELO.DEV_REGISTRY_READ", "REVIEWS.SET_REPLY", "PRICING_PLANS.CUSTOM_FORM_SUBMISSION_DELETE", "WIX_FORMS.SUBMISSION_REPORT_SPAM", "WIX_FORUM.POST_ADD_BEST_ANSWER_COMMENT_ALL", "premium.view-tpas", "CRM_TASKS.TASK_READ", "ANALYTICS_AND_REPORTS.USER_SETTINGS_UPDATE", "ECOM.CHARGE_MEMBERSHIP", "CALENDAR.READ_ALL_EXTERNAL_CALENDAR_CONNECTIONS", "SIDEBAR.ENABLE-CRM-HOME", "CHECKOUT_REQUIREMENTS.RULES_READ", "SIDEBAR.VIEW-RESTAURANTS-SOCIAL", "SIDEBAR.VIEW-RESTAURANTS-ANALYTICS", "AUTOCMS.FOLDER_SEARCH", "MEMBERS.COLLECTION_SETTINGS_WRITE", "premium.PremiumMailboxApi.getDomainMailboxEntitlementData", "ECOM.ADMIN_MODIFY_CARTS", "premium.RefundBackofficeApi.getRefundRequestById", "SIDEBAR.ENABLE_POS_SETTINGS", "ENTERPRISE.SEO.BULK_GOOGLE_CONNECT", "SIDEBAR.ENABLE_MARKETPLACE_OVERVIEW", "BLOG.READ-COMMENT", "SIDEBAR.VIEW-PING-SETTINGS", "PREMIUM_MANAGEMENT-PAYMENT.METHODS-GET_USER_IDENTITY", "POS.SETTINGS-MANAGE-PAYMENTS", "premium.vouchers.claimVoucher", "VELO.CREATE_APP", "BILLING.TAX_MIGRATION_INFO_UPDATE", "WIX_EVENTS.READ_MEMBER_TICKETS", "WIX_EVENTS.MANAGE_EVENTS", "SIDEBAR.ENABLE-GROUPS", "ONLINE_PROGRAMS.PROGRAM_STEP_CREATE", "ANALYTICS_AND_REPORTS.DOWNLOAD", "team.update-profile", "WIX_FORUM.POST_DELETE", "SIDEBAR.VIEW-ROLES-AND-PERMISSIONS-SETTINGS", "TABLE_RESERVATIONS.MIGRATE_OLD_RESTAURANT_SETTINGS", "BRANDED_APPS.UPDATE_STORE_LISTINGS", "SIDEBAR.ENABLE-RESTAURANTS-ORDERS", "BILLING.TAX_REGIONS_DELETE", "MEMBERS.MEMBER_UPDATE", "wix-stores.delete-abandoned-carts", "RELEASE_MANAGER.DELETE_RC", "bookings.manage-bookings", "CONTACTS.CURRENT_ID", "DEV_CENTER.REMOVE_APP_CONTRIBUTOR", "WIX-GROUPS.CREATE_POST", "WIX_STORES.WISH_API_WRITE", "WIX_FORUM.COMMENT_REPORT", "GOOGLE_MAILBOX_MANAGEMENT_API.CHANGE_SEATS_NUMBER", "WIX_DATA.LIST_RESTORATIONS", "SIDEBAR.VIEW-MAILBOXES", "SIDEBAR.VIEW-VIDEO-LIVE-STREAM", "VOTES.DOWNVOTE", "premium.CmsBackOfficeServerRpc.getAllPublishPage", "ECOM.DELIVERY_PROFILE_UPDATE", "RESTAURANTS.MODIFIER_READ", "ACCOUNT_AUTH_SETTINGS.UPDATE_FEDERATED_METHOD", "ANALYTICS_AND_REPORTS.SET_PARTNER_DIGEST_CONFIG", "html-editor.unpublish", "CHANNELS_TOKEN.TOKEN_STATUS_READ", "BENEFIT_PROGRAMS.POOL_CREATE", "html-editor.save-diff", "BLOG.REORDER-CATEGORIES", "WIX_RESTAURANTS.MANAGE_ORDERS", "PAYMENT_LINKS.PAYMENT_LINK_CHANGE_STATUS", "ANALYTICS_AND_REPORTS.CAN_SUBSCRIBE_OVERVIEWS", "ANALYTICS_AND_REPORTS.SCHEDULE_AN_ALERT", "CONTACTS_LABELS.MODIFY", "CASHIER.PROVIDER_ACCOUNTS_UPDATE", "premium.WixDealerService.getChangePlanPackagePickers", "premium.VouchersReadOnlyApi.getGoogleAdWordsVoucherSettings", "POS.READ_NOTIFICATION_USAGE", "SIDEBAR.VIEW-CRM-HOME", "INVOICES_SPI_HOST.CREATE_INVOICE", "WIX_FORMS.FORM_SPAM_SUBMISSION_REPORT_DELETE", "WIX_STORES.PRODUCT_OPTION_READ", "ECOM.READ_BACK_IN_STOCK_NOTIFICATION_REQUESTS", "insights.getCounters", "premium.VouchersDomainsApi.areEligibleVouchersForPurchase", "my-account.enable-contact-list", "WIX_DATA.CREATE_EXTERNAL_DATABASE_CONNECTION", "VELO.IDE_FILES_READ", "SIDEBAR.ENABLE-INVOICES", "CHAT.VIEW_EDIT_SETTINGS", "ONLINE_PROGRAMS.CATEGORY_CREATE", "ANALYTICS_AND_REPORTS.FORECAST_READ", "ENTITLEMENTS.ENTITLEMENT_UPDATE", "PROMOTE.SENDER_DETAILS_UPDATE", "tasks.view", "premium.WixPackagePickerSubmitController.packagePickerSubmitValidation.siteLevel", "wix-seo.read", "WIX_FORUM.CATEGORY_SUBSCRIBE", "WIX-EVENTS.VIEW-DASHBOARD", "WIX_DATA.QUERY_REFERENCED", "BRANDED_APPS.SUBMIT_APP_TO_STORE", "SIDEBAR.VIEW-BOOKINGS-CALENDAR", "BOOKINGS.MANAGE_OWN_SESSIONS", "MEMBERS.MEMBER_PRIVACY_SETTINGS_READ", "premium.UserSitesController.userSites", "SIDEBAR.ENABLE_POS", "WIX_EVENTS.READ_MEMBER_ORDERS", "TABLE_RESERVATIONS.RESERVATION_LOCATION_READ", "premium.GoogleMailboxBillingAndPaymentsApi.getByDomainName", "BLOG.CREATE-TAG", "RESTAURANTS.FULFILLMENT_METHOD_CREATE", "premium.WixDealerService.getBannerIdForAccount", "PAYMENTS.ACCOUNTS_UPDATE", "premium.PlansTransferSiteApi.removeSiteFromPackage", "SIDEBAR.VIEW_BLOG_PENDING_REVIEW", "HACK.CODE_UPLOAD", "WIX_FORMS.FORM_SPAM_SUBMISSION_REPORT_READ", "WIX_EDUCATION.MARK_EDUCATION_ACCOUNT", "PARTNERS.MARKETPLACE.GETUSERDETAILS", "my-account.manage-etpa", "INBOX.CREATE_CONVERSATIONS", "WIX_RESTAURANTS.ORDER_PACING_CREATE", "SALESFORCE.CONNECTION_WRITE", "FILE_SHARE.DOWNLOAD", "REVIEWS.UPDATE_CONFIGURATION", "PORTFOLIO.PROJECT_READ", "WIX_STORES.CHANNELS_PRODUCT_GATEWAY_DEACTIVATE", "WIX_RESTAURANTS.WRITE_LOCAL_DELIVERY", "WIX_CODE.VSCODE_ONBOARDING_UPDATE", "BLOG.EDIT-SETTINGS", "PROMOTE.MULTICHANNEL_CAMPAIGN_CREATE", "MARKETING.CONSENT_UPSERT", "premium.ManagePremiumController.internalHandleRequest", "WIX_STORES.MARKETPLACE_SETTINGS_READ", "VELO.DEV_PLUGIN_FUNCTION_INVOKE", "REVIEWS.DELETE_VOTE", "TABLE_RESERVATIONS.RESERVATION_CREATE_FORCE", "SIDEBAR.VIEW_BLOG_COMMENTS", "ACCOUNT_CM.TOPOLOGY_READ", "LOYALTY.MANAGE_ACCOUNTS", "ONLINE_PROGRAMS.CATEGORY_UPDATE", "BILLING.AVALARA_TAX_RULES_MAPPINGS_UPDATE", "BOOKINGS.MANAGE_SETTINGS", "WIXSTUDIO.AGENCY_CONTACT_DELETE", "contacts.import", "ACTION_TRIGGERS.SPREADSHEETS_ACTION", "SIDEBAR.VIEW-SOCIAL-SETTINGS", "premium.PremiumDashboardManager.getUserAlerts", "PAYMENTS.DISPUTE_CASES_UPDATE_EVIDENCE", "premium.DomainsPlansAssignmentApi.transferPlanBetweenSites", "AUTOCMS.WRITE_METADATA", "premium.PlansPackagePickerControllers.UnassignPlan.siteLevel", "BRANDED_APPS.UPDATE_COOKIES", "CONTACTS.MERGE", "WIX_DATA.DRIVER_FETCH_ITEMS", "SIDEBAR.ENABLE-CO-BRANDING", "WIX_DATA.CREATE_COLLECTIONS_SNAPSHOT", "ECOM.CHECKOUT_TEMPLATE_CREATE_CHECKOUT", "CHANNELS.SEO.BULK_GOOGLE_CONNECT", "BOOKINGS.STAFF_MEMBER_CREATE", "WIX_DATA.SHARED_DATA_COLLECTION_DELETE", "ECOM.DRAFT_ORDERS_SET_SHIPPING", "WIXSTUDIO.SITE_CLIENT_READ", "SIDEBAR.ENABLE-MANAGE-APPS", "premium.PremiumStoreApi.getProductPricesUsingCountryAndLanguageFromAspects", "EDITOR.DELETE_BRANCHES", "premium.PlansBoApi.getAllPlanProducts", "CASHIER.ONBOARDING_AVAILABILITY_UPDATE_PARTNER_FLOW", "WIX_NFT.SALES_READ", "SIDEBAR.ENABLE-PING-SETTINGS", "PRICING_PLANS.READ_PUBLIC_SETTINGS", "AUTOCMS.TASK_UPDATE_DRAFT_PUBLISH", "SIDEBAR.ENABLE-PRICE-QUOTES", "APPS_INSTALLER.INSTALL", "PARTNERS.CUSTOM_BRANDING_READ", "ANALYTICS_AND_REPORTS.SCHEDULE_AN_EMAIL", "FAQ.CREATE_CATEGORY", "COOKIE_CONSENT.CMP_CONFIG_READ", "ANALYTICS_AND_REPORTS.VIEW_CUSTOMER_CONTACT", "NOTIFICATION_PREFERENCES.READ_NOTIFICATION_TOPICS_DEFINITIONS", "ENTERPRISE.ACCOUNT_CMS_DASHBOARD_ACCESS", "premium.GenInvoiceListControllerBase", "SIDEBAR.ENABLE-MUSIC", "my-account.view-restaurants-orders", "WIX_SEO.CONNECT_BULK_CREATE", "premium.DomainTransferSiteRpc.getCurrentDomainContactInfo", "SIDEBAR.ENABLE-INBOX", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.INITIAL_DATA_SITE", "WIX_MULTILINGUAL.DELETE_LANGUAGE", "premium.WixDealerService.getCouponData", "SIDEBAR.VIEW-RESTAURANTS-ORDERS", "SIDEBAR.ENABLE-INSTALLED-APPS", "premium.PlansDealerApi.getUserTpaData", "ECOM.MODIFY_BACK_IN_STOCK_NOTIFICATION_SETTINGS", "WIX_DATA.GET_EXTERNAL_DATABASE_CONNECTION", "RESTAURANTS.MENU_ORDERING_SETTINGS_UPSERT", "premium.FeaturesManager.reportQuotaUsage", "CRM_TASKS.TASK_WIDGET", "LOYALTY.READ_COUPON_TEMPLATE", "OTT.TOKEN_CREATE", "BENEFIT_PROGRAMS.ITEM_READ", "POS.SEND_STAFF_MEMBER_TIPS_REPORT", "PORTFOLIO.SETTINGS_CREATE", "premium.CmsPublic.dealerCmsPreview", "ECOM.MANAGE_ITEM_DISCOUNT", "EDITOR.SITE_EMBED_READ", "ONLINE_PROGRAMS.PROGRAM_UPDATE", "PARTNERS.MARKETPLACE_PROVIDER_STATE_DELETE", "PORTFOLIO.SYNCED_PROJECTS_SYNC", "BRANDED_APPS.READ_STORES_CONFIG", "html-editor.admin-operation", "premium.PlansPurchasePageControllers.renderPlansPurchasePage", "premium.PlansManagementApi.injectRenewalCoupon", "ONLINE_PROGRAMS.INSTRUCTORS_MANAGE", "BENEFIT_PROGRAMS.ITEM_UPDATE", "DOCUMENT.EDIT_PAGE_SEO", "VELO.USER_CODE_REMOVE_VELO_DEPENDENCY", "BENEFIT_PROGRAMS.POOL_DELETE", "PREMIUM.CANCEL_TRANSFER", "MEDIA.SITE_MEDIA_FOLDERS_LIST_DELETED", "SIDEBAR.ENABLE-RESTAURANTS-RESERVATIONS", "OAUTH_APP.APP_CREATE", "SIDEBAR.VIEW-STORES-TAX-SETTINGS", "EDITOR.SITE_REVISION_READ", "REVIEWS.DELETE_REVIEW", "WIX_DATA.CREATE_COLLECTION", "PARTNERS.MARKETPLACE_TEMPLATE_LISTING_READ", "WIX_DATA.SHARED_DATA_COLLECTION_CONNECT", "WIX_COMMENTS.CATEGORY_CREATE", "premium.MailboxPurchasePageControllers.loadMailboxPurchasePage", "premium.PlansEmailSender.getRecurringReminderEmail", "premium.PremiumMsnServices.activateAdminUser", "RESTAURANTS.LABEL_DELETE", "ECOM.READ_ALL_ORDERS", "premium.CmsBackOfficeTemplatesRpc.updateThumbnail", "PRESETS_GALLERY_MANAGER.UPDATE_GALLERY", "STUDIO.VIEW_CLIENT_FEEDBACK_MANAGE_TAB", "authorization.invite-admin", "BENEFIT_PROGRAMS.POOL_PROVISION", "ECOM.READ_DISCOUNT_RULES", "ECOM.UPDATE_ORDERS_SETTINGS", "BRANDED_APPS.WRITE_DASHBOARD_STORE", "BILLING.TAX_SETTINGS_DELETE", "PRO_GALLERY.VIEW", "premium.StoreMailboxOldApi.getMailboxSaleTypeForUser", "premium.PlansPurchasePageControllers.createPlansOrderPage.siteLevel", "ENTITLEMENTS.TRANSACTION_CREATE", "premium.PlansManagementApi.assignPackageToSite", "SIDEBAR.VIEW_ALBUMS_TOOLS", "FAQ.UPDATE_CATEGORY", "COUPONS.READ_HAS_COUPONS", "PROMOTE.GOOGLE_ADS_ACCOUNT_DELETE", "PARTNERS.MARKETPLACE_TEMPLATE_LISTING_CREATE", "MEMBERS.CUSTOM_FIELDS_SUGGESTIONS_READ", "DEV_CENTER.MANAGE_HEADLESS_SITE", "my-account.enable-bookings-calendar", "SIDEBAR.VIEW-BOOKINGS-SETTINGS", "MEMBERS.GET_MEMBERS", "premium.WixDealerService.getCurrentChangePlanPackagePickerOptions", "BILLING.TAX_RULE_DELETE", "CHANNELS.CUSTOM_TEMPLATES_VIEW", "WIX_STORES.READ_ABANDONED_CARTS", "TABLE_RESERVATIONS.TIME_SLOT_READ", "BRANDED_APPS.WRITE_APP", "SITE_ACTION.GET_FEEDBACK", "premium.TpaTransferSiteApi.changePackageOwnership", "premium.GoogleMailboxBillingAndPaymentsApi.getSkus", "WIX_DATA.UPDATE", "ANALYTICS_AND_REPORTS.REAL_TIME_READ", "BILLING.TAX_REGION_UPDATE", "DOMAINS.MANAGE_DOMAINS", "ECOM.GET_APPLIED_DISCOUNTS", "ANALYTICS_AND_REPORTS.ENTERPRISE_DATA_READ", "wix-stores.edit-payments", "my-account.view-contact", "MOBILE_APPS.RECEIVE_MEMBER_DELETION_REQUEST", "SIDEBAR.VIEW-MY-ALBUMS", "PREMIUM_MANAGEMENT_SUBSCRIPTIONS.NEXT_PAYMENT", "VELO.IDE_FILES_OVERWRITE", "POS.PAYMENTS_MODIFY", "WIX_DATA.BULK_REMOVE_REFERENCES", "SIDEBAR.VIEW_SITE_BRANCHES", "BILLING.AVALARA_TAX_CREDENTIALS_CREATE", "WIX-FORUM.COMMENT-LIKE", "SHARED_GALLERY.READ", "PROMOTE.PUBLISHER_ITEM_CREATE", "CRM_TASKS.TASK_UPDATE", "VIRTUAL_NUMBERS.VIEW", "SMS_PROVIDER.READ_BRAND", "ECOM.DRAFT_ORDERS_DELETE_ADDITIONAL_FEES", "ECOM.DRAFT_ORDERS_READ", "premium.MsnStoreServices.didUserHaveHaveMsnPackage", "WIXSTUDIO.TEMPLATE_UPDATE", "ONLINE_PROGRAMS.PROGRAM_STEP_READ", "premium.PremiumDomainManager.notifyGoogleOnDomainCancellation", "WIX_DATA.BULK_SAVE", "SIDEBAR.ENABLE-RESTAURANTS-RESERVATIONS-SETTINGS", "WIX_DATA.CREATE_BACKUP", "BRANDED_APPS.FIX_REJECTIONS", "my-account.view-stores-products", "LOGO_MAKER.IMPORT_LOGOS", "premium.PlansEmailSender.getNoActiveBillingAccountEmail", "GROUPED_BOOKINGS.GROUPED_BOOKINGS_CANCEL", "PREMIUM.PREMIUM_ASSET_READ", "PREMIUM.CHARGE_LIMITS.UPDATE", "WIX_EVENTS.UPDATE_SITE_SETTINGS", "WIX_HOTELS.VIEW_MARKETS", "SIDEBAR.VIEW_WIX_COMMENTS", "WIX_DATA.BULK_REMOVE", "WIX_EDUCATION.ARE_WIX_USERS", "ACCOUNT.CREATE_ACCOUNT", "PORTFOLIO.PROJECT_ITEM_CREATE", "premium.getActiveTpaSubscriptions", "SIDEBAR.VIEW-EVENTS", "COUPONS.MANAGE", "MEMBERS.AUTHENTICATE_AS_USER", "premium.PlansBoApi.removePlanUpgradePaths", "blog-importer.manage-own", "BOOKINGS.SERVICES_CREATE", "GROUPED_BOOKINGS.GROUPED_BOOKINGS_DECLINE", "ANALYTICS_AND_REPORTS.VIEW_VISITORS_BEHAVIOUR", "BLOG.IMPORT_POSTS_FROM_WORDPRESS_SITE", "PARTNERS.PROFILE_CREATE", "account-manager.view-billing-on-sidebar", "WIX_NFT.SETTINGS_READ", "CALENDAR.ROLLOUT_STATUS_DELETE", "AUTOCMS.FOLDER_REFERENCE", "premium.VoucherProductApi.fixGoogleEligibleCountries", "NOTIFICATIONS.MEMBERS_FEED_NOTIFICATION_VIEWER_COUNT_MULTIPLE_TENANTS", "my-account.view-installed-apps", "PROPOSALS.PROPOSAL_TEMPLATE_READ_DOMAIN_EVENTS", "LIVE_VIDEO.READ_REACTIONS", "premium.PageScreenshotRpc.createSnapshot", "CRM_NOTES.NOTE_WIDGET", "WIX_DATA.DB_TASK_SUBMIT", "TOPICS.READ", "premium.userSites", "wix-events.check-in", "BLOG.READ_TAG", "AUTOMATIONS.PREINSTALLED_AUTOMATION_READ", "CRM_NOTES.NOTE_DELETE", "premium.assets.autoRenewOff", "TRIGGER_CATALOG.TRIGGER_CONFIGURATION_READ", "OPEN_AI_CLIENT.CHAT_COMPLETION_ACCOUNT_LEVEL", "VELO.USER_CODE_REMOVE_NPM_DEPENDENCY", "CALENDAR.READ_SCHEDULES_SESSIONS_WITH_PARTICIPANTS", "BOOKINGS.AVAILABILITY_READ_CLASS", "PROMOTE.PUBLISHER_USER_CONNECT", "bookings.cancel-own-bookings", "PAYMENT_LINKS.PAYMENT_LINK_SEND", "WIX_DATA.MANAGE_DRAFTS", "ENTITLEMENTS.BALANCE_CHANGE", "WIX_DATA.QUERY", "SIDEBAR.ENABLE_SITE_BRANCHES", "my-account.unpublish-app", "WIX_EDUCATION.ARE_PUBLISHED", "PAYMENTS.DISPUTE_CASES_DELETE", "ECOM.READ_CATEGORY", "BLOG.LIKE-POST-COMMENTS", "MEMBERS.REPORTS_DELETE", "PAPYRUS.UPDATE_DOCUMENT", "SIDEBAR.VIEW_DONATIONS_PERMISSION", "EDITOR.SITE_EMBED_UPDATE", "EDITOR.DEPLOYMENT_READ", "BOOKINGS.SERVICES_READ", "WIX-FORUM.COMMENT-DELETE-ALL", "premium.PlansTpaApi.getSitePremiumTpas", "PAYMENTS.DISPUTE_CASES_UPDATE", "WIX_EDUCATION.START_ACTIVITY", "ONLINE_PROGRAMS.STEP_UPDATE", "BLOG.TOGGLE-POST-COMMENTS", "WIX_DATA.DRIVER_QUERY", "DOCUMENT.ADD_PAGES", "WIXSTUDIO.TEMPLATE_SITE_CREATE_FROM_PUBLIC", "ASCEND.PACKAGE_PICKER_VIEW", "PAYMENTS.MERCHANT_CATEGORY_CODE_READ", "SIDEBAR.VIEW-RELEASE-MANAGER-SETTINGS", "ECOM.SHIPPING_OPTION_UPDATE", "BOOKINGS.BOOKING_READ_ANY", "BLOG.TOGGLE-SEO", "SIDEBAR.VIEW-ALBUM-DASHBOARD", "ONLINE_PROGRAMS.PARTICIPANT_ADD"],
                "siteToken": "JWS.eyJraWQiOiJzNG52UU83UiIsImFsZyI6IkhTMjU2In0.eyJkYXRhIjoie1widXNlcklkXCI6XCIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWRcIixcIm1ldGFzaXRlSWRcIjpcImQyMzIyMWNkLTUwMzktNGMzMC04ZTAzLWE2NmEwNTIzZTgxNVwiLFwicm9sZXNcIjpbXCJvd25lclwiXX0iLCJpYXQiOjE3MTg0MzY0MDJ9.RwkXMpAEBZDwPMSfbx97CKn3Sl1vwxzPlWXr72-xqkE"
            },
            "autoSaveInfo": {
                "shouldAutoSave": true,
                "lastTransactionId": "0"
            },
            "isHttpsEnabled": true,
            "mediaManagerInfo": {
                "userUploadToken": "JWS.eyJraWQiOiJzNG52UU83UiIsImFsZyI6IkhTMjU2In0.eyJkYXRhIjoie1widXNlcklkXCI6XCIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWRcIixcIm1ldGFzaXRlSWRcIjpcIjIyODc1MzNmLTA4ZGUtNDM3YS1iMzNiLWMzZWMzOTk2Y2NhZFwifSIsImlhdCI6MTcxODQzNjQwMiwiZXhwIjoxNzE5NjQ2MDAyfQ.GBzNCb8ZTdCd0jAaFGZtjaV3H083L3t7ADf-kFWmS2U",
                "siteUploadToken": "JWS.eyJraWQiOiJzNG52UU83UiIsImFsZyI6IkhTMjU2In0.eyJkYXRhIjoie1widXNlcklkXCI6XCIyMjg3NTMzZi0wOGRlLTQzN2EtYjMzYi1jM2VjMzk5NmNjYWRcIixcIm1ldGFzaXRlSWRcIjpcImQyMzIyMWNkLTUwMzktNGMzMC04ZTAzLWE2NmEwNTIzZTgxNVwifSIsImlhdCI6MTcxODQzNjQwMiwiZXhwIjoxNzE5NjQ2MDAyfQ.MXESy8FOEhVbAfFZ_keFOg_aH9qdhXXzjaXt_xDv8wo"
            },
            "hasSites": true,
            "isDraft": true,
            "signatures": {
                "rendererModel.siteMetaData": "tmc-211",
                "rendererModel.wixCodeModel": "u4f-22",
                "documentServicesModel.metaSiteData": "u4f-246",
                "rendererModel.routers": "mhu-609"
            },
            "isSiteCreationEligible": true
        };
        var serviceTopology = {
            "scriptsLocationMap": {
                "dealer-client-api": "https://static.parastorage.com/services/dealer-client-api/4.0.62",
                "dealer-react-viewer": "https://static.parastorage.com/services/dealer-react-viewer/1.36.0",
                "site-generator-statics-metadata": "https://static.parastorage.com/services/site-generator-statics-metadata/1.1703.0",
                "editor-platform-host-integration": "https://static.parastorage.com/services/editor-platform-host-integration/1.3632.0",
                "account-team-client": "https://static.parastorage.com/services/account-team-client/1.2582.0",
                "santa-editor": "https://static.parastorage.com/services/santa-editor/1.16622.0",
                "wix-code-classic-editor": "https://static.parastorage.com/services/wix-code-classic-editor/1.1279.3271",
                "wix-code-viewer-app": "https://static.parastorage.com/services/wix-code-viewer-app/1.1479.715",
                "marketplace-component": "https://static.parastorage.com/services/marketplace-component/1.5176.0",
                "react-dealer-viewer": "https://static.parastorage.com/services/react-dealer-viewer/2.0.81",
                "editor-presets-bundle": "https://static.parastorage.com/services/editor-presets-bundle/1.831.0",
                "dbsm-viewer-app": "https://static.parastorage.com/services/dbsm-viewer-app/1.8334.0",
                "fallback-viewer-app": "https://static.parastorage.com/services/fallback-viewer-app/1.0.0",
                "responsive-editor-common-infra": "https://static.parastorage.com/services/responsive-editor-common-infra/1.2715.0",
                "wix-bolt": "https://static.parastorage.com/services/wix-bolt/1.7777.0",
                "dealer-cms-translations": "https://static.parastorage.com/services/dealer-cms-translations/1.6754.0",
                "promote-analytics-adapter": "https://static.parastorage.com/services/promote-analytics-adapter/2.759.0",
                "editor-elements-design-systems": "https://static.parastorage.com/services/editor-elements-design-systems/1.4481.0",
                "wix-music-embed": "https://static.parastorage.com/services/wix-music-embed/1.26.0",
                "santa-resources": "https://static.parastorage.com/services/santa-resources/1.2.0",
                "wixapps": "https://static.parastorage.com/services/wixapps/2.486.0",
                "js-platform-editor-sdk": "https://static.parastorage.com/services/js-platform-editor-sdk/1.3953.0",
                "ecommerce": "https://static.parastorage.com/services/ecommerce/1.203.0",
                "advanced-seo-client": "https://static.parastorage.com/services/advanced-seo-client/2.1492.0",
                "dbsm-editor-app": "https://static.parastorage.com/services/dbsm-editor-app/1.11654.0",
                "santa-platform-apps-container": "https://static.parastorage.com/services/santa-platform-apps-container/1.2287.0",
                "langs": "https://static.parastorage.com/services/langs/2.577.0",
                "responsive-editor": "https://static.parastorage.com/services/responsive-editor/1.4107.0",
                "semi-native-sdk": "https://static.parastorage.com/services/semi-native-sdk/1.8.0",
                "pulse": "https://static.parastorage.com/services/pulse/2.0.12",
                "automation": "https://static.parastorage.com/services/automation/1.23.0",
                "wix-code-editor-app": "https://static.parastorage.com/services/wix-code-editor-app/1.1667.417",
                "wix-thunderbolt": "https://static.parastorage.com/services/wix-thunderbolt/1.14123.0",
                "identity-fed-common": "https://static.parastorage.com/services/identity-fed-common/3.0.42",
                "web": "https://static.parastorage.com/services/web/2.1229.80",
                "sitemembers": "https://static.parastorage.com/services/sm-js-sdk/1.31.0",
                "notifications-widget-component": "https://static.parastorage.com/services/notifications-widget-component/1.1646.0",
                "responsive-blocks-packages": "https://static.parastorage.com/services/responsive-blocks-packages/1.6734.0",
                "universal-editor-app": "https://static.parastorage.com/services/universal-editor-app/1.2851.0",
                "editor-elements": "https://static.parastorage.com/services/editor-elements/1.12190.0",
                "responsive-editor-migration": "https://static.parastorage.com/services/responsive-editor-migration/1.2155.0",
                "tpa": "https://static.parastorage.com/services/tpa/2.1065.0",
                "add-panel-data-classic-editor": "https://static.parastorage.com/services/add-panel-data-classic-editor/1.1923.0",
                "wix-code-platform": "https://static.parastorage.com/services/wix-code-platform/1.1097.93",
                "responsive-editor-presets-metadata": "https://static.parastorage.com/services/responsive-editor-presets-metadata/1.4631.0",
                "locale-dataset-data": "https://static.parastorage.com/services/locale-dataset-data/1.4213.0",
                "santa": "https://static.parastorage.com/services/santa/1.11783.0",
                "linguist-flags": "https://static.parastorage.com/services/linguist-flags/1.663.0",
                "promote-seo-renderer": "https://static.parastorage.com/services/promote-seo-renderer/1.2.0",
                "skins": "https://static.parastorage.com/services/skins/2.1229.80",
                "santa-site-auth-module": "https://static.parastorage.com/services/santa-site-auth-module/1.9.0",
                "document-management": "https://static.parastorage.com/services/document-management/1.14184.0",
                "editor-elements-library": "https://static.parastorage.com/services/editor-elements-library/1.9661.0",
                "responsive-editor-packages": "https://static.parastorage.com/services/responsive-editor-packages/1.14939.0",
                "mobile-app-elements-library": "https://static.parastorage.com/services/mobile-app-elements-library/1.1007.0",
                "manage-installed-apps": "https://static.parastorage.com/services/manage-installed-apps/1.1873.0",
                "wixcode-namespaces": "https://static.parastorage.com/services/wixcode-namespaces/1.1035.0",
                "media-gallery-g5": "https://static.parastorage.com/services/media-gallery-g5/1.1769.0",
                "core": "https://static.parastorage.com/services/core/2.1229.80",
                "santa-langs": "https://static.parastorage.com/services/santa-langs/1.11047.0",
                "ck-editor": "https://static.parastorage.com/services/ck-editor/1.87.3",
                "wixmp-sdk": "https://static.parastorage.com/services/wixmp-sdk/1.16.0",
                "marketplace-editor-container": "https://static.parastorage.com/services/marketplace-editor-container/1.2405.2158",
                "bootstrap": "https://static.parastorage.com/services/bootstrap/2.1229.80",
                "editorx-santa-editor-bridge": "https://static.parastorage.com/services/editorx-santa-editor-bridge/1.4031.0",
                "members-area-app-definitions": "https://static.parastorage.com/services/members-area-app-definitions/2.424.0",
                "js-platform-apps-configuration": "https://static.parastorage.com/services/js-platform-apps-configuration/1.235.0",
                "wix-code-code-editor": "https://static.parastorage.com/services/wix-code-code-editor/1.1500.0",
                "wix-ui-santa": "https://static.parastorage.com/services/wix-ui-santa/1.1805.0",
                "auto-frontend-modules": "https://static.parastorage.com/services/auto-frontend-modules/1.5097.0",
                "blocks-client-viewer-app": "https://static.parastorage.com/services/blocks-client-viewer-app/1.2134.0",
                "tpa-gfpp-data": "https://static.parastorage.com/services/tpa-gfpp-data/1.1765.0",
                "stylable-panel": "https://static.parastorage.com/services/stylable-panel/3.214.0"
            },
            "scriptsVersionsMap": {
                "santa-data-fixer": "1.3512.0",
                "@wix/santa-main-r": "1.1643.0",
                "santa-main-r": "1.1643.0",
                "simple-all-pages": "1.0.0",
                "blocks-builder-manifest-generator": "1.43.0",
                "@wix/santa-data-fixer": "1.3512.0",
                "remote-widget-structure-builder": "1.242.0",
                "remote-widget-metadata": "1.2036.0",
                "santa-site-metadata": "1.2142.0",
                "piler-siteassets": "1.59.0",
                "stylable-santa-flatten": "2.0.222",
                "@wix/piler-siteassets": "1.59.0"
            },
            "serverName": "wix.com",
            "wixCloudSiteExtensionsServiceUrl": "https://editor.wix.com/wix-code-service",
            "siteAssetsServerUrl": "https://siteassets.parastorage.com/pages",
            "htmlComponentServer": "https://0.htmlcomponentservice.com",
            "staticHTMLComponentUrl": "https://d23221cd-5039-4c30-8e03-a66a0523e815.filesusr.com/",
            "publicStaticsUrl": "//static.parastorage.com/services/wix-public/1.721.0/",
            "baseDomain": "wix.com",
            "basePublicUrl": "https://www.wix.com/",
            "editorPageStoreUrl": "https://fallback.wix.com/wix-html-editor-pages-webapp/pageForEditor",
            "directStaticServerUrl": "https://static.42.wix.com/",
            "scriptsDomainUrl": "https://static.parastorage.com/",
            "locationStaticServerUrl": "https://static.42.wix.com/",
            "publicPageStoreUrl": "https://publicorigin.wix.com/wix-public-html-renderer/page",
            "publicStaticBaseUri": "//static.parastorage.com/services/wix-public/1.721.0/",
            "appMarketEditorApiUrl": "https://editor.wix.com/_api/app-market-api/apps",
            "appMarketEditorNewUrl": "https://editor.wix.com/wix-app-market/editor",
            "appMarketEditorUrl": "https://editor.wix.com/app-market-editor",
            "appStoreUrl": "https://editor.wix.com/wix-apps",
            "biServerUrl": "https://frog.wix.com",
            "blobUrl": "https://static.parastorage.com/wix_blob",
            "commonServicesUrl": "https://api.wix.com/common-services",
            "createFacebookUrl": "https://www.wix.com/create/website/html/facebook/fb/1",
            "createMobileUrl": "https://meditor.wix.com/site/add/",
            "createWebsiteUrl": "https://www.wix.com/create/website/all/all/web",
            "dashboardServiceUrl": "https://dashboard.wix.com/wix-dashboard",
            "dashboardUrl": "https://www.wix.com/create/my-account",
            "developerMode": false,
            "digitalGoodsServerUrl": "https://dgs.wixapps.net/",
            "ecommerceCheckoutUrl": "https://www.safer-checkout.com/",
            "ecommerceStoreManagerUrl": "https://editor.wix.com/ecommerce",
            "editorAssetsBaseUrl": "https://editorassets.parastorage.com/",
            "editorServerRoot": "https://editor.wix.com/html/editor/web",
            "appStudioServerRoot": "https://editor.wix.com/html/app-builder/web",
            "editorServerRootFB": "https://editor.wix.com/html/editor/fb",
            "emailServer": "https://assets.wix.com/common-services/notification/invoke",
            "floggerUrl": "https://frog.wix.com",
            "helpServer": "https://lc.wix.com/support/main/html5",
            "htmlEditorRootUrl": "https://editor.wix.com/html/editor",
            "locationBaseDomain": "42.wix.com",
            "locationStaticServerRootUrl": "https://static.42.wix.com",
            "mediaGalleryBaseUrl": "https://editor.wix.com/_partials/media-gallery-ng/0.354.0/",
            "mediaGalleryBaseUrlB": "https://editor.wix.com/_partials/media-gallery-ng/0.354.0/",
            "mediaGalleryG5BaseUrl": "https://editor.wix.com/_partials/media-gallery-g5/1.1769.0/",
            "mediaGalleryG5StaticBaseUrl": "//static.parastorage.com/services/media-gallery-g5/1.1769.0/",
            "mediaGalleryStaticBaseUrl": "//static.parastorage.com/services/media-gallery-ng/0.354.0/",
            "mediaGalleryStaticBaseUrlB": "//static.parastorage.com/services/media-gallery-ng/0.354.0/",
            "mediaManagerUrl": "https://editor.wix.com/_partials/media-gallery-g5/1.1769.0/",
            "mediaManagerFrameUrl": "https://static.parastorage.com/unpkg-semver/media-frame@%5E1/MediaFrame.bundle.min.js",
            "mediaRootUrl": "https://static.wixstatic.com/",
            "mediaServerRoot": "wix.com",
            "nestedComponentsMapUrl": "",
            "premiumServerUrl": "https://premium.wix.com",
            "premiumStateApiUrl": "https://editor.wix.com/_api/wix/getTpaPremiumState",
            "productionMode": true,
            "screenshotServiceUrl": "https://screenshoter.wixpress.com/v1/screenshots",
            "siteMembersUrl": "https://users.wix.com/wix-sm",
            "staticAudioUrl": "https://music.wixstatic.com/mp3",
            "staticDocsUrl": "https://docs.wixstatic.com/ugd",
            "staticMediaUrl": "https://static.wixstatic.com/media",
            "staticServerFallbackUrl": "https://static.parastorage.com/",
            "staticServerUrl": "https://static.parastorage.com/",
            "staticVideoUrl": "https://video.wixstatic.com/",
            "wixCloudBaseDomain": "wix-code.com",
            "wixCloudEditorBaseUrl": "https://editor.wix.com/wix-code-ide-server",
            "wixCodeIdeServerUrl": "https://code.wix.com/wix-code-ide-server",
            "wixCodeServiceUrl": "https://code.wix.com/wix-code-service",
            "wixCloudMonitoringHubUrl": "https://editor.wix.com/_api/cloud-monitoring-hub",
            "wixCodeMonitoringHubUrl": "https://monitoringhub.wix.com",
            "staticVideoHeadRequestUrl": "https://storage.googleapis.com/video.wixstatic.com",
            "wixStoresMigrationServiceUrl": "https://editor.wix.com/_api/wix-ecommerce-migration-web/",
            "feedbackServiceUrl": "https://editor.wix.com/_api/feedback-server",
            "salesSystemResolverUrl": "https://editor.wix.com/_api/wix/salesSystemResolver",
            "dealerUrl": "https://editor.wix.com/_api/wix-dealer-integration-webapp",
            "mediaUploadServerUrl": "https://files.wix.com/",
            "adaptiveVideoDomain": "https://files.wix.com/",
            "userFileDomainUrl": "filesusr.com",
            "businessManagerUrl": "https://manage.wix.com/dashboard",
            "linguistUrl": "/_api/linguist",
            "editorWorkerBaseUrl": "https://editor.wix.com/_partials",
            "businessManagerDomain": "https://manage.wix.com",
            "editorRootUrl": "https://editor.wix.com/"
        };
    </script>

    <!-- HTML CLIENT VM - PREVIEW HEAD -->
    <!-- Ad data -->

    <script type="text/javascript">
        var adData = {
            "topLabel": "<span class='smallMusa'>(Wix-Logo) </span>Create a <span class='smallLogo'>Wix</span> site!",
            "topContent": "100s of templates<br />No coding needed<br /><span class='emphasis spacer'>Start now >></span>",
            "footerLabel": "<div class='adFootBox'><div class='siteBanner' ><div class='siteBanner'><div class='wrapper'><div class='bigMusa'>(Wix Logo)</div><div class='txt shd' style='color:#fff'>This site was created using </div> <div class='txt shd'><a  href='http://www.wix.com?utm_campaign=vir_wixad_live' style='color:#fff'> WIX.com. </a></div> <div class='txt shd' style='color:#fff'> Create your own for FREE <span class='emphasis'> >></span></div></div></div></div></div>",
            "adUrl": "http://www.wix.com?utm_campaign=vir_wixad_preview&experiment_id=1"
        };
        var mobileAdData = {
            "topLabel": "",
            "topContent": "",
            "footerLabel": "7c3dbd_67131d7bd570478689be752141d4e28a.jpg",
            "adUrl": "http://www.wix.com"
        };
    </script>


    <!-- DATA -->
    <script type="text/javascript">
        var siteAsJson = {};
        var renderingMode = "PREVIEW";
    </script>

    <script src="https://static.parastorage.com/services/document-management/1.14184.0/tb-main/dist/tb-main.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="react" src="https://static.parastorage.com/unpkg/react@16.14.0/umd/react.production.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="reactDOM" src="https://static.parastorage.com/unpkg/react-dom@16.14.0/umd/react-dom.production.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="lodash" src="https://static.parastorage.com/unpkg/lodash@4.17.21/lodash.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="pmrpc" src="https://static.parastorage.com/unpkg/pm-rpc@3.2.7/build/pm-rpc.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mainScript" src="https://static.parastorage.com/services/document-management/1.14184.0/tb-main/dist/tb-main-internal.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="santa-core-utils" src="https://static.parastorage.com/unpkg/@wix/santa-core-utils@1.2722.0/dist/coreUtils.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ajv" src="https://static.parastorage.com/unpkg/ajv@6.12.6/dist/ajv.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="immutable" src="https://static.parastorage.com/unpkg/immutable@3.8.2/dist/immutable.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="zepto" src="https://static.parastorage.com/unpkg/zepto@1.2.0/dist/zepto.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="platformEvents" src="https://static.parastorage.com/services/js-platform-editor-sdk/1.3953.0/lib/platformEvents.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="platformAPI" src="https://static.parastorage.com/services/js-platform-editor-sdk/1.3953.0/lib/platform-api.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="js-platform-apps-configuration-editor" src="https://static.parastorage.com/services/js-platform-apps-configuration/1.235.0/platform-apps-editor.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="santa-components" src="https://static.parastorage.com/unpkg/@wix/santa-components@1.1984.0/dist/santa-components.prod.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="prop-types" src="https://static.parastorage.com/unpkg/@wix/santa-bundle@1.1062.0/dist/bundle.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="color" src="https://static.parastorage.com/unpkg/@wix/santa-external-modules@1.644.0/color-convert/0.2.0/color.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="warmupUtilsLib" src="https://static.parastorage.com/unpkg/@wix/santa-core-utils@1.2722.0/dist/warmupUtils.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="skinUtils" src="https://static.parastorage.com/unpkg/@wix/santa-skin-utils@1.1686.0/dist/skin-utils.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="image-client-api" src="https://static.parastorage.com/unpkg/image-client-api@1.4060.0/dist/imageClientApi.js"></script>
    <link rel="stylesheet" href="https://static.parastorage.com/services/wix-thunderbolt-ds/dist/main-ds.37f741ce.min.css">
    <script src="https://static.parastorage.com/services/wix-thunderbolt-ds/dist/main-ds.d15ac6c8.bundle.min.js"></script>
    <link rel="stylesheet" href="https://static.parastorage.com/services/wix-thunderbolt-ds/dist/main-renderer-ds.30f71ad7.min.css">
    <script src="https://static.parastorage.com/services/wix-thunderbolt-ds/dist/main-renderer-ds.31d6cfe0.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://static.parastorage.com/services/wix-thunderbolt-ds/dist/dynamic-imports.2a6b7ec6.chunk.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://static.parastorage.com/services/editor-elements-library/dist/thunderboltPreview/rb_wixui.thunderboltPreview.94f6ea5f.min.css">
    <link rel="stylesheet" type="text/css" href="https://static.parastorage.com/services/editor-elements-design-systems/dist/thunderboltPreview/rb_dsgnsys.thunderboltPreview.b67ab7d9.min.css">
    <script src="https://static.parastorage.com/services/editor-elements-design-systems/dist/thunderboltPreview/rb_dsgnsys.thunderboltPreview.80c631bf.bundle.min.js"></script>
    <script src="https://static.parastorage.com/services/editor-elements-library/dist/thunderboltPreview/rb_wixui.thunderboltPreview.6acddd94.bundle.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wix-base-ui" src="https://static.parastorage.com/unpkg/@wix/wix-base-ui@2.778.0/dist/base-ui.js"></script>
    <style type="text/css">
        ._4BNdY {
            align-items: center;
            color: #fff;
            display: flex;
            height: 100%;
            justify-content: center;
            position: absolute;
            top: 0;
            width: 100%
        }

        [dir] ._4BNdY {
            background: rgba(0, 0, 0, .5);
            text-align: center
        }

        .o1zUV {
            height: 20px;
            width: 20px
        }

        [dir] .I2CV2 {
            margin-bottom: 56px
        }

        ._4JaLU {
            font-size: 16px;
            line-height: 24px;
            position: absolute
        }
    </style>
    <style type="text/css">
        .A1gtT,
        .EqiNz {
            -webkit-appearance: none
        }

        .A1gtT {
            width: 100%
        }

        [dir] .A1gtT {
            margin: 8px 0
        }

        .A1gtT.C-6PK {
            height: 4px
        }

        .A1gtT.GKU9- {
            height: 6px
        }

        [dir] .A1gtT:focus::-webkit-slider-runnable-track {
            background: rgba(0, 0, 0, .2)
        }

        [dir] .A1gtT:focus::-ms-fill-lower,
        [dir] .A1gtT:focus::-ms-fill-upper {
            background: rgba(0, 0, 0, .2)
        }

        [dir=ltr] .A1gtT::-webkit-slider-thumb {
            box-shadow: 1px 1px 1px rgba(0, 0, 0, .2), 0 0 1px hsla(0, 0%, 5%, .2)
        }

        [dir=rtl] .A1gtT::-webkit-slider-thumb {
            box-shadow: -1px 1px 1px rgba(0, 0, 0, .2), 0 0 1px hsla(0, 0%, 5%, .2)
        }

        [dir] .A1gtT:not(.m9ASN):focus.cnO3n::-webkit-slider-thumb,
        [dir] .A1gtT:not(.m9ASN):hover.cnO3n::-webkit-slider-thumb {
            background-color: var(--ricos-native-text-color, var(--ricos-action-color-fallback, #0261ff));
            border: 4px solid var(--ricos-native-text-color, var(--ricos-action-color-fallback, #0261ff))
        }

        [dir] .A1gtT:not(.m9ASN):focus:not(.cnO3n)::-webkit-slider-thumb,
        [dir] .A1gtT:not(.m9ASN):hover:not(.cnO3n)::-webkit-slider-thumb {
            background-color: var(--ricos-settings-action-color, var(--ricos-action-color-fallback, #0261ff));
            border: 4px solid var(--ricos-settings-action-color, var(--ricos-action-color-fallback, #0261ff))
        }

        [dir] .A1gtT.m9ASN.cnO3n::-webkit-slider-thumb {
            background-color: var(--ricos-native-text-color, var(--ricos-action-color-fallback, #0261ff));
            border: 4px solid var(--ricos-native-text-color, var(--ricos-action-color-fallback, #0261ff))
        }

        [dir] .A1gtT.m9ASN:not(.cnO3n)::-webkit-slider-thumb {
            background-color: var(--ricos-settings-action-color, var(--ricos-action-color-fallback, #0261ff));
            border: 4px solid var(--ricos-settings-action-color, var(--ricos-action-color-fallback, #0261ff))
        }

        [dir] .A1gtT::-webkit-slider-runnable-track {
            background: transparent;
            border: 0 solid #cfd8dc;
            border-radius: 3px;
            box-shadow: 0 0 0 rgba(0, 0, 0, .2), 0 0 0 hsla(0, 0%, 5%, .2)
        }

        .A1gtT:not(.C-6PK)::-webkit-slider-runnable-track {
            height: 6px;
            transition: all .2s ease;
            width: 100%
        }

        [dir] .A1gtT:not(.C-6PK)::-webkit-slider-runnable-track {
            cursor: pointer
        }

        .A1gtT.C-6PK::-webkit-slider-runnable-track {
            height: 4px !important
        }

        .A1gtT::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 16px;
            width: 16px
        }

        [dir] .A1gtT::-webkit-slider-thumb {
            background: transparent;
            border: 4px solid transparent;
            border-radius: 8px;
            box-shadow: none;
            cursor: pointer;
            margin-top: -5px
        }

        .A1gtT::-moz-range-track {
            height: 6px;
            transition: all .2s ease;
            width: 100%
        }

        [dir] .A1gtT::-moz-range-track {
            background: transparent;
            border: 0 solid #cfd8dc;
            border-radius: 3px;
            box-shadow: 0 0 0 rgba(0, 0, 0, .2), 0 0 0 hsla(0, 0%, 5%, .2);
            cursor: pointer
        }

        .A1gtT::-moz-range-thumb {
            box-sizing: border-box;
            height: 16px;
            width: 16px
        }

        [dir] .A1gtT::-moz-range-thumb {
            background: transparent;
            border: 4px solid transparent;
            border-radius: 8px;
            box-shadow: none;
            cursor: pointer
        }

        .A1gtT::-ms-track {
            color: transparent;
            height: 6px;
            transition: all .2s ease;
            width: 100%
        }

        [dir] .A1gtT::-ms-track {
            background: transparent;
            border-color: transparent;
            border-width: 8px 0;
            cursor: pointer
        }

        [dir] .A1gtT::-ms-fill-lower,
        [dir] .A1gtT::-ms-fill-upper {
            background: var(--ricos-settings-action-color, var(--ricos-action-color-fallback, #0261ff));
            border: 0 solid #cfd8dc;
            border-radius: 6px;
            box-shadow: 0 0 0 rgba(0, 0, 0, .2), 0 0 0 hsla(0, 0%, 5%, .2)
        }

        .A1gtT::-ms-thumb {
            height: 16px;
            width: 16px
        }

        [dir] .A1gtT::-ms-thumb {
            background: transparent;
            border: 4px solid transparent;
            border-radius: 8px;
            box-shadow: none;
            cursor: pointer;
            margin-top: 0
        }
    </style>
</head>

<body data-view-mode="preview" class="">

    <div id="SITE_CONTAINER">
        <style data-comp-id="masterPage">
            #masterPage:not(.landingPage) #PAGES_CONTAINER {
                margin-top: 0px;
                margin-bottom: 0px;
            }

            #masterPage.landingPage #SITE_FOOTER {
                display: none;
            }

            #masterPage.landingPage #SITE_HEADER {
                display: none;
            }

            #masterPage.landingPage #SITE_HEADER-placeholder {
                display: none;
            }

            #masterPage.landingPage #SITE_FOOTER-placeholder {
                display: none;
            }

            #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus,
            #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus~.wixSdkShowFocusOnSibling {
                --focus-ring-box-shadow: 0 0 0 1px #ffffff, 0 0 0 3px #116dff;
                box-shadow: var(--focus-ring-box-shadow) !important;
                z-index: 1;
            }

            .has-inner-focus-ring {
                --focus-ring-box-shadow: inset 0 0 0 1px #ffffff, inset 0 0 0 3px #116dff !important;
            }

            #masterPage {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            #PAGES_CONTAINER {
                --pinned-layer-in-container: 50;
                --above-all-in-container: 49;
            }

            #SITE_FOOTER {
                --pinned-layer-in-container: 51;
                --above-all-in-container: 49;
            }

            #SITE_HEADER {
                z-index: 49;
                --above-all-in-container: 10000;
            }

            :root,
            :host,
            .spxThemeOverride,
            .max-width-container {
                --color_0: 255, 255, 255;
                --color_1: 255, 255, 255;
                --color_2: 0, 0, 0;
                --color_3: 237, 28, 36;
                --color_4: 0, 136, 203;
                --color_5: 255, 203, 5;
                --color_6: 114, 114, 114;
                --color_7: 176, 176, 176;
                --color_8: 255, 255, 255;
                --color_9: 114, 114, 114;
                --color_10: 176, 176, 176;
                --color_11: 255, 255, 255;
                --color_12: 232, 230, 230;
                --color_13: 199, 199, 199;
                --color_14: 99, 99, 99;
                --color_15: 0, 0, 0;
                --color_16: 250, 217, 217;
                --color_17: 231, 178, 166;
                --color_18: 188, 36, 36;
                --color_19: 140, 35, 11;
                --color_20: 87, 15, 0;
                --color_21: 255, 196, 228;
                --color_22: 255, 166, 215;
                --color_23: 255, 77, 175;
                --color_24: 170, 51, 117;
                --color_25: 85, 26, 58;
                --color_26: 212, 185, 239;
                --color_27: 173, 122, 222;
                --color_28: 130, 92, 167;
                --color_29: 86, 61, 111;
                --color_30: 43, 31, 56;
                --color_31: 249, 226, 192;
                --color_32: 243, 210, 159;
                --color_33: 237, 172, 74;
                --color_34: 158, 115, 49;
                --color_35: 79, 57, 25;
                --color_36: 255, 255, 255;
                --color_37: 0, 0, 0;
                --color_38: 232, 230, 230;
                --color_39: 199, 199, 199;
                --color_40: 99, 99, 99;
                --color_41: 188, 36, 36;
                --color_42: 250, 217, 217;
                --color_43: 199, 199, 199;
                --color_44: 255, 255, 255;
                --color_45: 0, 0, 0;
                --color_46: 0, 0, 0;
                --color_47: 0, 0, 0;
                --color_48: 188, 36, 36;
                --color_49: 188, 36, 36;
                --color_50: 255, 255, 255;
                --color_51: 255, 255, 255;
                --color_52: 188, 36, 36;
                --color_53: 188, 36, 36;
                --color_54: 199, 199, 199;
                --color_55: 199, 199, 199;
                --color_56: 255, 255, 255;
                --color_57: 255, 255, 255;
                --color_58: 188, 36, 36;
                --color_59: 188, 36, 36;
                --color_60: 188, 36, 36;
                --color_61: 188, 36, 36;
                --color_62: 255, 255, 255;
                --color_63: 255, 255, 255;
                --color_64: 199, 199, 199;
                --color_65: 199, 199, 199;
                --font_0: normal normal normal 55px/1.4em pridi, serif;
                --font_1: normal normal normal 16px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
                --font_2: normal normal normal 42px/1.4em pridi, serif;
                --font_3: normal normal normal 36px/1.4em pridi, serif;
                --font_4: normal normal normal 28px/1.4em pridi, serif;
                --font_5: normal normal normal 24px/1.4em prompt, sans-serif;
                --font_6: normal normal normal 18px/1.4em pridi, serif;
                --font_7: normal normal bold 16px/1.4em prompt, sans-serif;
                --font_8: normal normal bold 14px/1.4em prompt, sans-serif;
                --font_9: normal normal normal 14px/1.4em prompt, sans-serif;
                --font_10: normal normal normal 12px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
                --wix-ads-height: 50px;
                --sticky-offset: 50px;
                --wix-ads-top-height: 50px;
                --vh-unit: calc((100vh - 50px) / 100);
                --site-width: 980px;
                --above-all-z-index: 100000;
                --portals-z-index: 100001;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                --minViewportSize: 320;
                --maxViewportSize: 1920;
                --theme-spx-ratio: 1px;
            }

            .font_0 {
                font: var(--font_0);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_1 {
                font: var(--font_1);
                color: rgb(var(--color_14));
                letter-spacing: 0em;
            }

            .font_2 {
                font: var(--font_2);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_3 {
                font: var(--font_3);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_4 {
                font: var(--font_4);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_5 {
                font: var(--font_5);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_6 {
                font: var(--font_6);
                color: rgb(var(--color_45));
                letter-spacing: 0em;
            }

            .font_7 {
                font: var(--font_7);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_8 {
                font: var(--font_8);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_9 {
                font: var(--font_9);
                color: rgb(var(--color_15));
                letter-spacing: 0em;
            }

            .font_10 {
                font: var(--font_10);
                color: rgb(var(--color_14));
                letter-spacing: 0em;
            }

            .color_0 {
                color: rgb(var(--color_0));
            }

            .color_1 {
                color: rgb(var(--color_1));
            }

            .color_2 {
                color: rgb(var(--color_2));
            }

            .color_3 {
                color: rgb(var(--color_3));
            }

            .color_4 {
                color: rgb(var(--color_4));
            }

            .color_5 {
                color: rgb(var(--color_5));
            }

            .color_6 {
                color: rgb(var(--color_6));
            }

            .color_7 {
                color: rgb(var(--color_7));
            }

            .color_8 {
                color: rgb(var(--color_8));
            }

            .color_9 {
                color: rgb(var(--color_9));
            }

            .color_10 {
                color: rgb(var(--color_10));
            }

            .color_11 {
                color: rgb(var(--color_11));
            }

            .color_12 {
                color: rgb(var(--color_12));
            }

            .color_13 {
                color: rgb(var(--color_13));
            }

            .color_14 {
                color: rgb(var(--color_14));
            }

            .color_15 {
                color: rgb(var(--color_15));
            }

            .color_16 {
                color: rgb(var(--color_16));
            }

            .color_17 {
                color: rgb(var(--color_17));
            }

            .color_18 {
                color: rgb(var(--color_18));
            }

            .color_19 {
                color: rgb(var(--color_19));
            }

            .color_20 {
                color: rgb(var(--color_20));
            }

            .color_21 {
                color: rgb(var(--color_21));
            }

            .color_22 {
                color: rgb(var(--color_22));
            }

            .color_23 {
                color: rgb(var(--color_23));
            }

            .color_24 {
                color: rgb(var(--color_24));
            }

            .color_25 {
                color: rgb(var(--color_25));
            }

            .color_26 {
                color: rgb(var(--color_26));
            }

            .color_27 {
                color: rgb(var(--color_27));
            }

            .color_28 {
                color: rgb(var(--color_28));
            }

            .color_29 {
                color: rgb(var(--color_29));
            }

            .color_30 {
                color: rgb(var(--color_30));
            }

            .color_31 {
                color: rgb(var(--color_31));
            }

            .color_32 {
                color: rgb(var(--color_32));
            }

            .color_33 {
                color: rgb(var(--color_33));
            }

            .color_34 {
                color: rgb(var(--color_34));
            }

            .color_35 {
                color: rgb(var(--color_35));
            }

            .color_36 {
                color: rgb(var(--color_36));
            }

            .color_37 {
                color: rgb(var(--color_37));
            }

            .color_38 {
                color: rgb(var(--color_38));
            }

            .color_39 {
                color: rgb(var(--color_39));
            }

            .color_40 {
                color: rgb(var(--color_40));
            }

            .color_41 {
                color: rgb(var(--color_41));
            }

            .color_42 {
                color: rgb(var(--color_42));
            }

            .color_43 {
                color: rgb(var(--color_43));
            }

            .color_44 {
                color: rgb(var(--color_44));
            }

            .color_45 {
                color: rgb(var(--color_45));
            }

            .color_46 {
                color: rgb(var(--color_46));
            }

            .color_47 {
                color: rgb(var(--color_47));
            }

            .color_48 {
                color: rgb(var(--color_48));
            }

            .color_49 {
                color: rgb(var(--color_49));
            }

            .color_50 {
                color: rgb(var(--color_50));
            }

            .color_51 {
                color: rgb(var(--color_51));
            }

            .color_52 {
                color: rgb(var(--color_52));
            }

            .color_53 {
                color: rgb(var(--color_53));
            }

            .color_54 {
                color: rgb(var(--color_54));
            }

            .color_55 {
                color: rgb(var(--color_55));
            }

            .color_56 {
                color: rgb(var(--color_56));
            }

            .color_57 {
                color: rgb(var(--color_57));
            }

            .color_58 {
                color: rgb(var(--color_58));
            }

            .color_59 {
                color: rgb(var(--color_59));
            }

            .color_60 {
                color: rgb(var(--color_60));
            }

            .color_61 {
                color: rgb(var(--color_61));
            }

            .color_62 {
                color: rgb(var(--color_62));
            }

            .color_63 {
                color: rgb(var(--color_63));
            }

            .color_64 {
                color: rgb(var(--color_64));
            }

            .color_65 {
                color: rgb(var(--color_65));
            }

            .backcolor_0 {
                background-color: rgb(var(--color_0));
            }

            .backcolor_1 {
                background-color: rgb(var(--color_1));
            }

            .backcolor_2 {
                background-color: rgb(var(--color_2));
            }

            .backcolor_3 {
                background-color: rgb(var(--color_3));
            }

            .backcolor_4 {
                background-color: rgb(var(--color_4));
            }

            .backcolor_5 {
                background-color: rgb(var(--color_5));
            }

            .backcolor_6 {
                background-color: rgb(var(--color_6));
            }

            .backcolor_7 {
                background-color: rgb(var(--color_7));
            }

            .backcolor_8 {
                background-color: rgb(var(--color_8));
            }

            .backcolor_9 {
                background-color: rgb(var(--color_9));
            }

            .backcolor_10 {
                background-color: rgb(var(--color_10));
            }

            .backcolor_11 {
                background-color: rgb(var(--color_11));
            }

            .backcolor_12 {
                background-color: rgb(var(--color_12));
            }

            .backcolor_13 {
                background-color: rgb(var(--color_13));
            }

            .backcolor_14 {
                background-color: rgb(var(--color_14));
            }

            .backcolor_15 {
                background-color: rgb(var(--color_15));
            }

            .backcolor_16 {
                background-color: rgb(var(--color_16));
            }

            .backcolor_17 {
                background-color: rgb(var(--color_17));
            }

            .backcolor_18 {
                background-color: rgb(var(--color_18));
            }

            .backcolor_19 {
                background-color: rgb(var(--color_19));
            }

            .backcolor_20 {
                background-color: rgb(var(--color_20));
            }

            .backcolor_21 {
                background-color: rgb(var(--color_21));
            }

            .backcolor_22 {
                background-color: rgb(var(--color_22));
            }

            .backcolor_23 {
                background-color: rgb(var(--color_23));
            }

            .backcolor_24 {
                background-color: rgb(var(--color_24));
            }

            .backcolor_25 {
                background-color: rgb(var(--color_25));
            }

            .backcolor_26 {
                background-color: rgb(var(--color_26));
            }

            .backcolor_27 {
                background-color: rgb(var(--color_27));
            }

            .backcolor_28 {
                background-color: rgb(var(--color_28));
            }

            .backcolor_29 {
                background-color: rgb(var(--color_29));
            }

            .backcolor_30 {
                background-color: rgb(var(--color_30));
            }

            .backcolor_31 {
                background-color: rgb(var(--color_31));
            }

            .backcolor_32 {
                background-color: rgb(var(--color_32));
            }

            .backcolor_33 {
                background-color: rgb(var(--color_33));
            }

            .backcolor_34 {
                background-color: rgb(var(--color_34));
            }

            .backcolor_35 {
                background-color: rgb(var(--color_35));
            }

            .backcolor_36 {
                background-color: rgb(var(--color_36));
            }

            .backcolor_37 {
                background-color: rgb(var(--color_37));
            }

            .backcolor_38 {
                background-color: rgb(var(--color_38));
            }

            .backcolor_39 {
                background-color: rgb(var(--color_39));
            }

            .backcolor_40 {
                background-color: rgb(var(--color_40));
            }

            .backcolor_41 {
                background-color: rgb(var(--color_41));
            }

            .backcolor_42 {
                background-color: rgb(var(--color_42));
            }

            .backcolor_43 {
                background-color: rgb(var(--color_43));
            }

            .backcolor_44 {
                background-color: rgb(var(--color_44));
            }

            .backcolor_45 {
                background-color: rgb(var(--color_45));
            }

            .backcolor_46 {
                background-color: rgb(var(--color_46));
            }

            .backcolor_47 {
                background-color: rgb(var(--color_47));
            }

            .backcolor_48 {
                background-color: rgb(var(--color_48));
            }

            .backcolor_49 {
                background-color: rgb(var(--color_49));
            }

            .backcolor_50 {
                background-color: rgb(var(--color_50));
            }

            .backcolor_51 {
                background-color: rgb(var(--color_51));
            }

            .backcolor_52 {
                background-color: rgb(var(--color_52));
            }

            .backcolor_53 {
                background-color: rgb(var(--color_53));
            }

            .backcolor_54 {
                background-color: rgb(var(--color_54));
            }

            .backcolor_55 {
                background-color: rgb(var(--color_55));
            }

            .backcolor_56 {
                background-color: rgb(var(--color_56));
            }

            .backcolor_57 {
                background-color: rgb(var(--color_57));
            }

            .backcolor_58 {
                background-color: rgb(var(--color_58));
            }

            .backcolor_59 {
                background-color: rgb(var(--color_59));
            }

            .backcolor_60 {
                background-color: rgb(var(--color_60));
            }

            .backcolor_61 {
                background-color: rgb(var(--color_61));
            }

            .backcolor_62 {
                background-color: rgb(var(--color_62));
            }

            .backcolor_63 {
                background-color: rgb(var(--color_63));
            }

            .backcolor_64 {
                background-color: rgb(var(--color_64));
            }

            .backcolor_65 {
                background-color: rgb(var(--color_65));
            }
        </style>
        <style data-comp-id="PAGES_CONTAINER">
            #PAGES_CONTAINER {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }
        </style>
        <style data-comp-id="SITE_PAGES">
            #SITE_PAGES {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }
        </style>
        <style data-comp-id="SITE_FOOTER">
            #SITE_FOOTER {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            [data-mesh-id=SITE_FOOTERinlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=SITE_FOOTERinlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=SITE_FOOTERinlineContent-gridContainer]>[id="comp-kq81xzvk"] {
                position: relative;
                margin: 20px 0px 21px calc((100% - 980px) * 0.5);
                left: 0px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }
        </style>
        <style data-comp-id="comp-kq81xzvk">
            #comp-kq81xzvk {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 980px;
            }

            [data-mesh-id=comp-kq81xzwminlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=comp-kq81xzwminlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=comp-kq81xzwminlineContent-gridContainer]>[id="comp-kq858ef0"] {
                position: relative;
                margin: 11px 0px 11px calc((100% - 490px) * 0.5);
                left: 18px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-kq82haifinlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=comp-kq82haifinlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=comp-kq82haifinlineContent-gridContainer]>[id="comp-kzvdv4ws"] {
                position: relative;
                margin: 11px 0px 11px calc((100% - 490px) * 0.5);
                left: 20px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }
        </style>
        <style data-comp-id="comp-kq81xzwm">
            #comp-kq81xzwm {
                width: 490px;
            }
        </style>
        <style data-comp-id="comp-kq858ef0">
            #comp-kq858ef0 {
                width: 450px;
                height: auto;
            }
        </style>
        <style data-comp-id="comp-kq82haif">
            #comp-kq82haif {
                width: 490px;
            }
        </style>
        <style data-comp-id="comp-kzvdv4ws">
            #comp-kzvdv4ws {
                width: 450px;
                height: auto;
            }
        </style>
        <style data-comp-id="SITE_HEADER">
            #masterPage:not(.landingPage) {
                --top-offset: 0px;
                --header-height: 80px;
            }

            #masterPage.landingPage {
                --top-offset: 0px;
            }

            #SITE_HEADER {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 0;
            }

            [data-mesh-id=SITE_HEADERinlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=SITE_HEADERinlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=SITE_HEADERinlineContent-gridContainer]>[id="comp-kq7u7fmi"] {
                position: relative;
                margin: 17px 0px 18px calc((100% - 980px) * 0.5);
                left: 0px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }
        </style>
        <style data-comp-id="comp-kq7u7fmi">
            #comp-kq7u7fmi {
                left: 0;
                margin-left: 0;
                width: 100%;
                min-width: 980px;
            }

            [data-mesh-id=comp-kq7u7fnzinlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=comp-kq7u7fnzinlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=comp-kq7u7fnzinlineContent-gridContainer]>[id="comp-kq85ewe6"] {
                position: relative;
                margin: 14px 0px 14px calc((100% - 490px) * 0);
                left: 51px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }

            [data-mesh-id=comp-kq7u7n00inlineContent] {
                height: auto;
                width: 100%;
            }

            [data-mesh-id=comp-kq7u7n00inlineContent-gridContainer] {
                position: static;
                display: grid;
                height: auto;
                width: 100%;
                min-height: auto;
                grid-template-rows: 1fr;
                grid-template-columns: 100%;
            }

            [data-mesh-id=comp-kq7u7n00inlineContent-gridContainer]>[id="comp-kq85k6k5"] {
                position: relative;
                margin: 7px 0px 8px calc((100% - 490px) * 1);
                left: 0px;
                grid-area: 1 / 1 / 2 / 2;
                justify-self: start;
                align-self: start;
            }
        </style>
        <style data-comp-id="comp-kq7u7fnz">
            #comp-kq7u7fnz {
                width: 490px;
            }
        </style>
        <style data-comp-id="comp-kq85ewe6">
            #comp-kq85ewe6 {
                width: 440px;
                height: auto;
            }
        </style>
        <style data-comp-id="comp-kq7u7n00">
            #comp-kq7u7n00 {
                width: 490px;
            }
        </style>
        <style data-comp-id="comp-kq85k6k5">
            #comp-kq85k6k5 {
                --menuTotalBordersX: 0px;
                --menuTotalBordersY: 0px;
                --bgDrop: var(--color_42);
                --rd: 0px;
                --shd: none;
                --fnt: var(--font_8);
                --pad: 5px;
                --txt: var(--color_19);
                --trans: color 0.4s ease 0s;
                --txth: var(--color_15);
                --txts: var(--color_15);
                --alpha-bgDrop: 1;
                --alpha-txt: 1;
                --alpha-txth: 1;
                --alpha-txts: 1;
                --boxShadowToggleOn-shd: none;
            }

            #comp-kq85k6k5 {
                width: 450px;
                height: 30px;
            }
        </style>
        <style id="STYLE_OVERRIDES_ID">
            #EXTRA_SITE_HEIGHT {
                position: relative;
                height: 40px;
            }
        </style>
        <div id="main_MF" class="main_MF">
            <div id="FONT_FACES">
                <style>
                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDQZG5JnZLfkcWJqWgJbU28O7w.woff2") format('woff2');
                        unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDQZG5JnZLfkcWSqWgJbU28O7w.woff2") format('woff2');
                        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDQZG5JnZLfkcWTqWgJbU28O7w.woff2") format('woff2');
                        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDQZG5JnZLfkcWdqWgJbU28.woff2") format('woff2');
                        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDdZG5JnZLfkc0mjH0wT0CWAbUdXCg.woff2") format('woff2');
                        unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDdZG5JnZLfkc0mjH0rT0CWAbUdXCg.woff2") format('woff2');
                        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDdZG5JnZLfkc0mjH0qT0CWAbUdXCg.woff2") format('woff2');
                        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Pridi';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/pridi/v6/2sDdZG5JnZLfkc0mjH0kT0CWAbUd.woff2") format('woff2');
                        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                        font-display: block;
                    }
                </style>
                <style></style>
                <style>
                    @font-face {
                        font-family: "DIN-Next-W01-Light";
                        src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix");
                        src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc176270-17fa-4c78-a343-9fe52824e501.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3516f91d-ac48-42cd-acfe-1be691152cc4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d1b1e866-a411-42ba-8f75-72bf28e23694.svg#d1b1e866-a411-42ba-8f75-72bf28e23694") format("svg");
                        font-display: block;
                    }
                </style>
                <style>
                    @font-face {
                        font-family: "DIN-Next-W02-Light";
                        src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix");
                        src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/07d62b21-8d7a-4c36-be86-d32ab1089972.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0050890-bbed-44b9-94df-2611d72dbb06.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9f774d17-c03a-418e-a375-34f3beecbc7a.svg#9f774d17-c03a-418e-a375-34f3beecbc7a") format("svg");
                        font-display: block;
                    }
                </style>
                <style>
                    @font-face {
                        font-family: "DIN-Next-W10-Light";
                        src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix");
                        src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9e95a29-98a7-404a-90ee-1929ad09c696.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a7663fd-eae8-4e50-a67a-225271f8cceb.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58ae9be9-5d95-44b6-8b6c-e6da6a46822c.svg#58ae9be9-5d95-44b6-8b6c-e6da6a46822c") format("svg");
                        font-display: block;
                    }
                </style>
                <style>
                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_9XJnvUD7dzB2KZeoLTkYBeZ0lTiM.woff2") format('woff2');
                        unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_9XJnvUD7dzB2KZeoQTkYBeZ0lTiM.woff2") format('woff2');
                        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_9XJnvUD7dzB2KZeoRTkYBeZ0lTiM.woff2") format('woff2');
                        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_9XJnvUD7dzB2KZeofTkYBeZ0l.woff2") format('woff2');
                        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_6XJnvUD7dzB2KZeKka1M4W5APdCox2gU.woff2") format('woff2');
                        unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_6XJnvUD7dzB2KZeKka1MjW5APdCox2gU.woff2") format('woff2');
                        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_6XJnvUD7dzB2KZeKka1MiW5APdCox2gU.woff2") format('woff2');
                        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: italic;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_6XJnvUD7dzB2KZeKka1MsW5APdCox.woff2") format('woff2');
                        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W__XJnvUD7dzB2KdNodREEje60k.woff2") format('woff2');
                        unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W__XJnvUD7dzB2Kb9odREEje60k.woff2") format('woff2');
                        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W__XJnvUD7dzB2KbtodREEje60k.woff2") format('woff2');
                        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 400;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W__XJnvUD7dzB2KYNodREEjew.woff2") format('woff2');
                        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_8XJnvUD7dzB2C2_8IfWMuUZctdhow.woff2") format('woff2');
                        unicode-range: U+0E01-0E5B, U+200C-200D, U+25CC;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_8XJnvUD7dzB2C2_8IZmMuUZctdhow.woff2") format('woff2');
                        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_8XJnvUD7dzB2C2_8IZ2MuUZctdhow.woff2") format('woff2');
                        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                        font-display: block;
                    }

                    @font-face {
                        font-family: 'Prompt';
                        font-style: normal;
                        font-weight: 700;
                        src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/prompt/v5/-W_8XJnvUD7dzB2C2_8IaWMuUZctdg.woff2") format('woff2');
                        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                        font-display: block;
                    }
                </style>
            </div>
           
            <div id="BACKGROUND_GROUP" class="BACKGROUND_GROUP">
                <div id="BACKGROUND_GROUP_TRANSITION_GROUP">
                    <div id="pageBackground_c1dmp" data-media-height-override-type="" data-media-position-override="false" class="pageBackground_c1dmp BmZ5pC">
                        <div id="bgLayers_pageBackground_c1dmp" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                            <div id="bgMedia_pageBackground_c1dmp" data-motion-part="BG_MEDIA" class="VgO9Yg"><wow-image id="img_pageBackground_c1dmp" class="HlRz5e Kv1aVt dLPlxY mNGsUM bgImage" data-image-info="{&quot;containerId&quot;:&quot;pageBackground_c1dmp&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:1920,&quot;targetHeight&quot;:1920,&quot;imageData&quot;:{&quot;width&quot;:1920,&quot;height&quot;:1080,&quot;uri&quot;:&quot;c837a6_d2247e64a7984ef6ba07a20dea95f81e~mv2.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-has-ssr-src="" style="--wix-img-max-width: max(1920px, 100%);"><img alt="" width="1920" height="1920" style="width: 980px; height: 598px; object-fit: cover;" fetchpriority="high" src="https://static.wixstatic.com/media/c837a6_d2247e64a7984ef6ba07a20dea95f81e~mv2.png/v1/fill/w_1225,h_748,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/c837a6_d2247e64a7984ef6ba07a20dea95f81e~mv2.png"></wow-image></div>
                        </div>
                    </div>
                </div>
            </div><button id="SKIP_TO_CONTENT_BTN" class="SKIP_TO_CONTENT_BTN LHrbPP has-custom-focus" tabindex="0">ข้ามเนื้อหาหลัก</button>
            <div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" tabindex="-1" role="region" aria-label="top of page"><span class="mHZSwn">top of page</span></div>
            <div id="site-root" class="site-root" style="transform-origin: 50% 0px;">
                <div id="masterPage" class="mesh-layout masterPage css-editing-scope">
                    <header class="SITE_HEADER_WRAPPER" tabindex="-1" id="SITE_HEADER_WRAPPER">
                        <div id="SITE_HEADER" class="AT7o0U Bhu9m5 wixui-header" tabindex="-1">
                            <div class="lvxhkV"></div>
                            <div class="cKxVkc">
                                <div class="vlM3HR"></div>
                                <div class="VrZrC0">
                                    <div data-mesh-id="SITE_HEADERinlineContent" data-testid="inline-content" class="">
                                        <div data-mesh-id="SITE_HEADERinlineContent-gridContainer" data-testid="mesh-container-content">
                                            <section id="comp-kq7u7fmi" class="comp-kq7u7fmi CohWsy wixui-column-strip">
                                                <div id="bgLayers_comp-kq7u7fmi" data-hook="bgLayers" data-motion-part="BG_LAYER" class="if7Vw2">
                                                    <div data-testid="colorUnderlay" class="tcElKx i1tH8h"></div>
                                                    <div id="bgMedia_comp-kq7u7fmi" data-motion-part="BG_MEDIA" class="wG8dni"></div>
                                                </div>
                                                <div data-testid="columns" class="V5AUxf">
                                                    <div id="comp-kq7u7fnz" class="comp-kq7u7fnz YzqVVZ wixui-column-strip__column">
                                                        <div id="bgLayers_comp-kq7u7fnz" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                            <div id="bgMedia_comp-kq7u7fnz" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                        </div>
                                                        <div data-mesh-id="comp-kq7u7fnzinlineContent" data-testid="inline-content" class="">
                                                            <div data-mesh-id="comp-kq7u7fnzinlineContent-gridContainer" data-testid="mesh-container-content">
                                                                <div id="comp-kq85ewe6" class="wWvZUh" style="--height: 17px;">
                                                                    <div id="text-content-comp-kq85ewe6" class="HcOXKn c9GqVL QxJLC3 comp-kq85ewe6 wixui-rich-text" data-testid="richTextElement">
                                                                        <p class="font_8 wixui-rich-text__text" style="line-height:1.2em; font-size:14px;"><a href="https://editor.wix.com/html/editor/web/renderer/render/document/58a5bb32-b56b-42ae-9bb5-9e1d04949ced" target="_self" class="wixui-rich-text__text"><span class="color_15 wixui-rich-text__text"><span style="letter-spacing:0.1em;" class="wixui-rich-text__text">Kittinun roonsungneon | บล็อกเกอร์</span></span></a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-kq7u7n00" class="comp-kq7u7n00 YzqVVZ wixui-column-strip__column">
                                                        <div id="bgLayers_comp-kq7u7n00" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                            <div id="bgMedia_comp-kq7u7n00" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                        </div>
                                                        <div data-mesh-id="comp-kq7u7n00inlineContent" data-testid="inline-content" class="">
                                                            <div data-mesh-id="comp-kq7u7n00inlineContent-gridContainer" data-testid="mesh-container-content"><wix-dropdown-menu id="comp-kq85k6k5" class="XwCBRN NHM1d1 comp-kq85k6k5 wixui-dropdown-menu hidden-during-prewarmup" tabindex="-1" dir="ltr" data-stretch-buttons-to-menu-width="true" data-same-width-buttons="false" data-num-items="1" data-menuborder-y="0" data-menubtn-border="0" data-ribbon-els="0" data-label-pad="0" data-ribbon-extra="0" data-dropalign="center" style="visibility: inherit; overflow-x: visible;" data-dropmode="dropDown">
                                                                    <nav class="R_TAzU" id="comp-kq85k6k5navContainer" aria-label="เว็บไซต์">
                                                                        <ul class="y7qwii" id="comp-kq85k6k5itemsContainer" data-marginallchildren="true" style="text-align: center;">
                                                                            <li id="comp-kq85k6k50" data-direction="ltr" data-listposition="lonely" data-data-id="bmi23nr" data-state="menu selected  link" data-index="0" class="Tg1gOB wixui-dropdown-menu__item xTjc1A" data-original-gap-between-text-and-btn="10" aria-hidden="false" style="width: 450px; height: 30px; position: relative; box-sizing: border-box; overflow: visible; visibility: inherit;">
                                                                                <a data-testid="linkElement" href="index.php" target="_self" class="UiHgGh" aria-haspopup="false">
                                                                                    <div class="yRj2ms">
                                                                                        <div class="" style="text-align: right;">
                                                                                            <p class="JS76Uv" id="comp-kq85k6k50label" style="text-align: right; line-height: 30px;">หน้าหลัก</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></li>
                                                                            <li id="comp-kq85k6k5__more__" data-direction="ltr" data-listposition="right" data-state="menu false  header" data-index="__more__" data-dropdown="false" class="p90CkU xTjc1A" data-original-gap-between-text-and-btn="10" aria-hidden="true" style="height: 0px; overflow: hidden; position: absolute; visibility: hidden;">
                                                                                <div data-testid="linkElement" class="UiHgGh" tabindex="0" aria-haspopup="false">
                                                                                    <div class="yRj2ms">
                                                                                        <div class="" style="text-align: right;">
                                                                                            <p class="JS76Uv" id="comp-kq85k6k5__more__label" style="text-align: right;" tabindex="-1">อื่นๆ</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="h3jCPd" id="comp-kq85k6k5dropWrapper" data-dropalign="center" data-dropdown-shown="false" style="inset: 30px auto auto 0px;">
                                                                            <ul class="wkJ2fp wixui-dropdown-menu__submenu" id="comp-kq85k6k5moreContainer" data-listposition="lonely" style="left: 0px; right: auto;"></ul>
                                                                        </div>
                                                                        <div id="comp-kq85k6k5navContainer-hiddenA11ySubMenuIndication" style="display: none;">Use tab to navigate through the menu items.</div>
                                                                    </nav>
                                                                </wix-dropdown-menu></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
                        <div id="SITE_PAGES" data-page-transition="OutIn" class="JsJXaX SITE_PAGES">
                            <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
                                <style data-comp-id="c1dmp">
                                    #c1dmp {
                                        left: 0;
                                        margin-left: 0;
                                        width: 100%;
                                        min-width: 0;
                                    }

                                    #masterPage {
                                        --pinned-layers-in-page: 0;
                                    }

                                    [data-mesh-id=Containerc1dmpinlineContent] {
                                        height: auto;
                                        width: 100%;
                                    }

                                    [data-mesh-id=Containerc1dmpinlineContent-gridContainer] {
                                        position: static;
                                        display: grid;
                                        height: auto;
                                        width: 100%;
                                        min-height: 40px;
                                        grid-template-rows: 1fr;
                                        grid-template-columns: 100%;
                                        padding-bottom: 0px;
                                        box-sizing: border-box;
                                    }

                                    [data-mesh-id=Containerc1dmpinlineContent-gridContainer]>[id="comp-lvmfejn8"] {
                                        position: relative;
                                        margin: 0px 0px 0 calc((100% - 980px) * 0.5);
                                        left: 0px;
                                        grid-area: 1 / 1 / 2 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }
                                </style>
                                <style data-comp-id="comp-lvmfejn8">
                                    #comp-lvmfejn8 {
                                        left: 0;
                                        margin-left: 0;
                                        width: 100%;
                                        min-width: 0;
                                    }

                                    [data-mesh-id=comp-lvmfejn8inlineContent] {
                                        height: auto;
                                        width: 100%;
                                    }

                                    [data-mesh-id=comp-lvmfejn8inlineContent-gridContainer] {
                                        position: static;
                                        display: grid;
                                        height: auto;
                                        width: 100%;
                                        min-height: auto;
                                        grid-template-rows: 1fr;
                                        grid-template-columns: 100%;
                                    }

                                    [data-mesh-id=comp-lvmfejn8inlineContent-gridContainer]>[id="comp-kq7u2pux"] {
                                        position: relative;
                                        margin: 0px 0px 0px calc((100% - 980px) * 0.5);
                                        left: 0px;
                                        grid-area: 1 / 1 / 2 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }
                                </style>
                                <style data-comp-id="comp-kq7u2pux">
                                    #comp-kq7u2pux {
                                        left: 0;
                                        margin-left: 0;
                                        width: 100%;
                                        min-width: 980px;
                                    }

                                    [data-mesh-id=comp-kq7u2pwainlineContent] {
                                        height: auto;
                                        width: 100%;
                                    }

                                    [data-mesh-id=comp-kq7u2pwainlineContent-gridContainer] {
                                        position: static;
                                        display: grid;
                                        height: auto;
                                        width: 100%;
                                        min-height: 732px;
                                        grid-template-rows: 1fr;
                                        grid-template-columns: 100%;
                                    }

                                    [data-mesh-id=comp-kq7u2pwainlineContent-gridContainer]>[id="comp-kq83z1ci"] {
                                        position: relative;
                                        margin: 110px 0px 10px calc((100% - 490px) * 0.5);
                                        left: 28px;
                                        grid-area: 1 / 1 / 2 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent] {
                                        height: auto;
                                        width: 100%;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer] {
                                        position: static;
                                        display: grid;
                                        height: auto;
                                        width: 100%;
                                        min-height: 732px;
                                        grid-template-rows: repeat(6, min-content) 1fr;
                                        grid-template-columns: 100%;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kq827f1n"] {
                                        position: relative;
                                        margin: 101px 0px 15px calc((100% - 490px) * 0.5);
                                        left: 30px;
                                        grid-area: 1 / 1 / 2 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kqambx2a"] {
                                        position: relative;
                                        margin: 0px 0px 26px calc((100% - 490px) * 0.5);
                                        left: 30px;
                                        grid-area: 2 / 1 / 3 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kq83taja"] {
                                        position: relative;
                                        margin: 0px 0px 17px calc((100% - 490px) * 0.5);
                                        left: 30px;
                                        grid-area: 3 / 1 / 4 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kq83tvbe"] {
                                        position: relative;
                                        margin: 0px 0px 18px calc((100% - 490px) * 0.5);
                                        left: 30px;
                                        grid-area: 4 / 1 / 5 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kq83txkh"] {
                                        position: relative;
                                        margin: 0px 0px 18px calc((100% - 490px) * 0.5);
                                        left: 30px;
                                        grid-area: 5 / 1 / 6 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kq82d8um"] {
                                        position: relative;
                                        margin: 0px 0px 39px calc((100% - 490px) * 0.5);
                                        left: 30px;
                                        grid-area: 6 / 1 / 7 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }

                                    [data-mesh-id=comp-kq7u3q04inlineContent-gridContainer]>[id="comp-kq85afj0"] {
                                        position: relative;
                                        margin: 0px 0px 10px calc((100% - 490px) * 0.5);
                                        left: 166px;
                                        grid-area: 7 / 1 / 8 / 2;
                                        justify-self: start;
                                        align-self: start;
                                    }
                                </style>
                                <style data-comp-id="comp-kq7u2pwa">
                                    #comp-kq7u2pwa {
                                        width: 490px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq83z1ci">
                                    #comp-kq83z1ci {
                                        --rd: 25px 25px 25px 25px;
                                        --shd: 16.73px 18.58px 20px 0px rgba(85, 22, 34, 0.29);
                                        --brd: var(--color_11);
                                        --brw: 0px;
                                        --sizeRd: 25px 25px 25px 25px;
                                        --sizeBrw: 0px;
                                        --trans: opacity 0.4s ease 0s;
                                        --bgh: var(--color_15);
                                        --contentPaddingLeft: 0px;
                                        --contentPaddingRight: 0px;
                                        --contentPaddingBottom: 0px;
                                        --contentPaddingTop: 0px;
                                        --alpha-brd: 0.02;
                                        --alpha-bgh: 0;
                                    }

                                    #comp-kq83z1ci {
                                        width: 431px;
                                        height: 466px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq7u3q04">
                                    #comp-kq7u3q04 {
                                        width: 490px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq827f1n">
                                    #comp-kq827f1n {
                                        width: 450px;
                                        height: auto;
                                    }
                                </style>
                                <style data-comp-id="comp-kqambx2a">
                                    #comp-kqambx2a {
                                        width: 450px;
                                        height: auto;
                                    }
                                </style>
                                <style data-comp-id="comp-kq83taja">
                                    #comp-kq83taja {
                                        --rd: 10px 10px 10px 10px;
                                        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                                        --shd: none;
                                        --fnt: var(--font_8);
                                        --trans2: color 0.4s ease 0s;
                                        --txt: var(--color_37);
                                        --brw: 1px;
                                        --bg: var(--color_36);
                                        --brd: var(--color_37);
                                        --bgh: var(--color_37);
                                        --brdh: var(--color_36);
                                        --txth: var(--color_42);
                                        --bgd: 204, 204, 204;
                                        --alpha-bgd: 1;
                                        --brdd: 204, 204, 204;
                                        --alpha-brdd: 1;
                                        --txtd: 255, 255, 255;
                                        --alpha-txtd: 1;
                                        --boxShadowToggleOn-shd: none;
                                        --alpha-txt: 1;
                                        --alpha-brdh: 0;
                                        --alpha-brd: 0.5;
                                        --alpha-txth: 1;
                                        --alpha-bg: 1;
                                        --alpha-bgh: 1;
                                    }

                                    #comp-kq83taja {
                                        width: 430px;
                                        height: 50px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq83tvbe">
                                    #comp-kq83tvbe {
                                        --rd: 10px 10px 10px 10px;
                                        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                                        --shd: none;
                                        --fnt: var(--font_8);
                                        --trans2: color 0.4s ease 0s;
                                        --txt: var(--color_37);
                                        --brw: 1px;
                                        --bg: var(--color_36);
                                        --brd: var(--color_37);
                                        --bgh: var(--color_37);
                                        --brdh: var(--color_36);
                                        --txth: var(--color_42);
                                        --bgd: 204, 204, 204;
                                        --alpha-bgd: 1;
                                        --brdd: 204, 204, 204;
                                        --alpha-brdd: 1;
                                        --txtd: 255, 255, 255;
                                        --alpha-txtd: 1;
                                        --alpha-bg: 1;
                                        --alpha-bgh: 1;
                                        --alpha-brd: 0.5;
                                        --alpha-brdh: 0;
                                        --alpha-txt: 1;
                                        --alpha-txth: 1;
                                        --boxShadowToggleOn-shd: none;
                                    }

                                    #comp-kq83tvbe {
                                        width: 430px;
                                        height: 50px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq83txkh">
                                    #comp-kq83txkh {
                                        --rd: 10px 10px 10px 10px;
                                        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                                        --shd: none;
                                        --fnt: var(--font_8);
                                        --trans2: color 0.4s ease 0s;
                                        --txt: var(--color_37);
                                        --brw: 1px;
                                        --bg: var(--color_36);
                                        --brd: var(--color_37);
                                        --bgh: var(--color_37);
                                        --brdh: var(--color_36);
                                        --txth: var(--color_42);
                                        --bgd: 204, 204, 204;
                                        --alpha-bgd: 1;
                                        --brdd: 204, 204, 204;
                                        --alpha-brdd: 1;
                                        --txtd: 255, 255, 255;
                                        --alpha-txtd: 1;
                                        --alpha-bg: 1;
                                        --alpha-bgh: 1;
                                        --alpha-brd: 0.5;
                                        --alpha-brdh: 0;
                                        --alpha-txt: 1;
                                        --alpha-txth: 1;
                                        --boxShadowToggleOn-shd: none;
                                    }

                                    #comp-kq83txkh {
                                        width: 430px;
                                        height: 50px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq82d8um">
                                    #comp-kq82d8um {
                                        --rd: 10px 10px 10px 10px;
                                        --trans1: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                                        --shd: none;
                                        --fnt: var(--font_8);
                                        --trans2: color 0.4s ease 0s;
                                        --txt: var(--color_37);
                                        --brw: 1px;
                                        --bg: var(--color_36);
                                        --brd: var(--color_37);
                                        --bgh: var(--color_37);
                                        --brdh: var(--color_36);
                                        --txth: var(--color_42);
                                        --bgd: 204, 204, 204;
                                        --alpha-bgd: 1;
                                        --brdd: 204, 204, 204;
                                        --alpha-brdd: 1;
                                        --txtd: 255, 255, 255;
                                        --alpha-txtd: 1;
                                        --alpha-bg: 1;
                                        --alpha-bgh: 1;
                                        --alpha-brd: 0.5;
                                        --alpha-brdh: 0;
                                        --alpha-txt: 1;
                                        --alpha-txth: 1;
                                        --boxShadowToggleOn-shd: none;
                                    }

                                    #comp-kq82d8um {
                                        width: 430px;
                                        height: 50px;
                                    }
                                </style>
                                <style data-comp-id="comp-kq85afj0">
                                    #comp-kq85afj0 {
                                        width: 158px;
                                        height: 22px;
                                    }
                                </style>
                                <div id="c1dmp" class="dBAkHi c1dmp">
                                    <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                                    <div class="HT5ybB">
                                        <div id="Containerc1dmp" class="Containerc1dmp SPY_vo">
                                            <div data-mesh-id="Containerc1dmpinlineContent" data-testid="inline-content" class="">
                                                <div data-mesh-id="Containerc1dmpinlineContent-gridContainer" data-testid="mesh-container-content">
                                                    <section id="comp-lvmfejn8" tabindex="-1" class="Oqnisf comp-lvmfejn8 wixui-section" data-block-level-container="ClassicSection">
                                                        <div id="bgLayers_comp-lvmfejn8" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                            <div id="bgMedia_comp-lvmfejn8" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                        </div>
                                                        <div data-mesh-id="comp-lvmfejn8inlineContent" data-testid="inline-content" class="">
                                                            <div data-mesh-id="comp-lvmfejn8inlineContent-gridContainer" data-testid="mesh-container-content">
                                                                <section id="comp-kq7u2pux" class="comp-kq7u2pux CohWsy wixui-column-strip">
                                                                    <div id="bgLayers_comp-kq7u2pux" data-hook="bgLayers" data-motion-part="BG_LAYER" class="if7Vw2">
                                                                        <div data-testid="colorUnderlay" class="tcElKx i1tH8h"></div>
                                                                        <div id="bgMedia_comp-kq7u2pux" data-motion-part="BG_MEDIA" class="wG8dni"></div>
                                                                    </div>
                                                                    <div data-testid="columns" class="V5AUxf">
                                                                        <div id="comp-kq7u2pwa" class="comp-kq7u2pwa YzqVVZ wixui-column-strip__column">
                                                                            <div id="bgLayers_comp-kq7u2pwa" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                                                <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                                                <div id="bgMedia_comp-kq7u2pwa" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                                            </div>
                                                                            <div data-mesh-id="comp-kq7u2pwainlineContent" data-testid="inline-content" class="">
                                                                                <div data-mesh-id="comp-kq7u2pwainlineContent-gridContainer" data-testid="mesh-container-content">
                                                                                    <div id="comp-kq83z1ci" class="LjV9wd comp-kq83z1ci wixui-image">
                                                                                        <div data-testid="linkElement" class="Ikn7zx" style="background-color: white; ">
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <div style="text-align: center; display: inline-block;">
                                                                                              <h1>  
                                                                                            เนื่องจากการสร้างเว็บไซต์สมัยนี้ มีการพัฒนาที่เป็นทั้งแบบ Front-end และ Back-end และเฟรมเวิร์คที่พัฒนาด้าน Front-end มีหลากหลายเจ้าไม่ว่าจะเป็น vuejs reactjs angularjs 
    เลยเป็นที่มาของการทำการทำสอบประสิทธิภาพ Frontend framework ในการจัดการ DOM 
    การทดสอบความสามารถในการจัดการ DOM เป็นขั้นตอนสำคัญในการพัฒนาแอปพลิเคชันเว็บ เนื่องจากการจัดการ DOM มีผลต่อประสิทธิภาพและประสิทธิภาพของแอปพลิเคชัน 
    และมีผลต่อประสิทธิภาพการทำงานของ Frontend Frameworks ด้วยการทดสอบความสามารถในการจัดการ DOM ช่วยให้ผู้พัฒนาสามารถตรวจสอบความถูกต้องและประสิทธิภาพของโค้ดที่ใช้ในการจัดการ DOM ได้อย่างมีประสิทธิภาพปัญหาที่เกี่ยวข้องที่สำคัญคือความแตกต่างในการจัดการ DOM ระหว่าง Frontend Frameworks ที่สามารถมีผลต่อประสิทธิภาพของแอปพลิเคชันและประสิทธิภาพในการทำงานของ Frontend Frameworks ด้วย
    </h1>
</div>
                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="comp-kq7u3q04" class="comp-kq7u3q04 YzqVVZ wixui-column-strip__column">
                                                                            <div id="bgLayers_comp-kq7u3q04" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                                                <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                                                <div id="bgMedia_comp-kq7u3q04" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                                            </div>
                                                                            <div data-mesh-id="comp-kq7u3q04inlineContent" data-testid="inline-content" class="">
                                                                                <div data-mesh-id="comp-kq7u3q04inlineContent-gridContainer" data-testid="mesh-container-content">
                                                                                    <div id="comp-kq827f1n" class="wWvZUh" style="--height: 121px;">
                                                                                        <div id="text-content-comp-kq827f1n" class="HcOXKn c9GqVL QxJLC3 comp-kq827f1n wixui-rich-text" data-testid="richTextElement">
                                                                                            <h3 class="font_0 wixui-rich-text__text" style="line-height:1.1em; font-size:55px;"><span style="letter-spacing:normal;" class="wixui-rich-text__text">I'am kittinun roonsungnoen<br class="wixui-rich-text__text">
                                                                                                    </span></h3>
                                                                                        </div>
                                                                                        <div id="text-content-comp-kq827f1n" class="HcOXKn c9GqVL QxJLC3 comp-kq827f1n wixui-rich-text" data-testid="richTextElement">
                                                                                            <h3 class="font_0 wixui-rich-text__text" style="line-height:1.1em; font-size:55px;"><span style="letter-spacing:normal;" class="wixui-rich-text__text">65130695<br class="wixui-rich-text__text">
                                                                                                    </span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <br>
                                                                                    <div class="comp-kq83taja FubTgk" id="comp-kq83taja" aria-disabled="false"><a data-testid="linkElement" href="index.php" rel="noreferrer noopener" class="uDW_Qe wixui-button PlZyDq" aria-disabled="false"><span class="l7_2fn wixui-button__label">MyHome</span></a></div>
                                                                                    <div class="comp-kq83tvbe FubTgk" id="comp-kq83tvbe" aria-disabled="false"><a data-testid="linkElement" href="https://www.wix.com/templateslp/links" rel="noreferrer noopener" class="uDW_Qe wixui-button PlZyDq" aria-disabled="false"><span class="l7_2fn wixui-button__label">MyResearch</span></a></div>
                                                                                    <div class="comp-kq83txkh FubTgk" id="comp-kq83txkh" aria-disabled="false"><a data-testid="linkElement" href="https://www.wix.com/templateslp/links" rel="noreferrer noopener" class="uDW_Qe wixui-button PlZyDq" aria-disabled="false"><span class="l7_2fn wixui-button__label">My Research Plan</span></a></div>
                                                                                    <!-- <div class="comp-kq82d8um FubTgk" id="comp-kq82d8um" aria-disabled="false"><a data-testid="linkElement" href="https://www.wix.com/templateslp/links"  rel="noreferrer noopener" class="uDW_Qe wixui-button PlZyDq" aria-disabled="false"><span class="l7_2fn wixui-button__label">ร่วมงานกับเรา</span></a></div> -->
                                                                                    <div id="comp-kq85afj0" class="comp-kq85afj0 WzbAF8">
                                                                                        <ul class="mpGTIt" aria-label="แถบสื่อโซเชียล">
                                                                                            <li id="dataItem-kq85afkn-comp-kq85afj0" class="O6KwRn"><a data-testid="linkElement" href="https://www.twitter.com/wix" target="_blank" rel="noreferrer noopener" class="oRtuWN" aria-label="Twitter"><wow-image id="img_0_comp-kq85afj0" class="HlRz5e YaS0jR" data-image-info="{&quot;containerId&quot;:&quot;dataItem-kq85afkn-comp-kq85afj0&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:200,&quot;height&quot;:200,&quot;uri&quot;:&quot;c7d035ba85f6486680c2facedecdcf4d.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-has-ssr-src="" style="--wix-img-max-width: max(200px, 100%);"><img alt="Twitter" fetchpriority="high" src="https://static.wixstatic.com/media/c7d035ba85f6486680c2facedecdcf4d.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/c7d035ba85f6486680c2facedecdcf4d.png" style="width: 22px; height: 22px; object-fit: cover;"></wow-image></a></li>
                                                                                            <li id="dataItem-kq85afkk1-comp-kq85afj0" class="O6KwRn"><a data-testid="linkElement" href="https://www.facebook.com/wix" target="_blank" rel="noreferrer noopener" class="oRtuWN" aria-label="Facebook"><wow-image id="img_1_comp-kq85afj0" class="HlRz5e YaS0jR" data-image-info="{&quot;containerId&quot;:&quot;dataItem-kq85afkk1-comp-kq85afj0&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:200,&quot;height&quot;:200,&quot;uri&quot;:&quot;0fdef751204647a3bbd7eaa2827ed4f9.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-has-ssr-src="" style="--wix-img-max-width: max(200px, 100%);"><img alt="Facebook" fetchpriority="high" src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0fdef751204647a3bbd7eaa2827ed4f9.png" style="width: 22px; height: 22px; object-fit: cover;"></wow-image></a></li>
                                                                                            <li id="dataItem-kq85afko4-comp-kq85afj0" class="O6KwRn"><a data-testid="linkElement" href="https://www.instagram.com/wix" target="_blank" rel="noreferrer noopener" class="oRtuWN" aria-label="Instagram"><wow-image id="img_2_comp-kq85afj0" class="HlRz5e YaS0jR" data-image-info="{&quot;containerId&quot;:&quot;dataItem-kq85afko4-comp-kq85afj0&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:200,&quot;height&quot;:200,&quot;uri&quot;:&quot;01c3aff52f2a4dffa526d7a9843d46ea.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-has-ssr-src="" style="--wix-img-max-width: max(200px, 100%);"><img alt="Instagram" fetchpriority="high" src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/01c3aff52f2a4dffa526d7a9843d46ea.png" style="width: 22px; height: 22px; object-fit: cover;"></wow-image></a></li>
                                                                                            <li id="dataItem-kq85afkn2-comp-kq85afj0" class="O6KwRn"><a data-testid="linkElement" href="https://www.youtube.com/user/Wix" target="_blank" rel="noreferrer noopener" class="oRtuWN" aria-label="YouTube"><wow-image id="img_3_comp-kq85afj0" class="HlRz5e YaS0jR" data-image-info="{&quot;containerId&quot;:&quot;dataItem-kq85afkn2-comp-kq85afj0&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:200,&quot;height&quot;:200,&quot;uri&quot;:&quot;78aa2057f0cb42fbbaffcbc36280a64a.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-has-ssr-src="" style="--wix-img-max-width: max(200px, 100%);"><img alt="YouTube" fetchpriority="high" src="https://static.wixstatic.com/media/78aa2057f0cb42fbbaffcbc36280a64a.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/78aa2057f0cb42fbbaffcbc36280a64a.png" style="width: 22px; height: 22px; object-fit: cover;"></wow-image></a></li>
                                                                                            <li id="dataItem-kq85cx51-comp-kq85afj0" class="O6KwRn"><a data-testid="linkElement" href="https://www.tiktok.com/@wix" target="_blank" rel="noreferrer noopener" class="oRtuWN" aria-label="TikTok"><wow-image id="img_4_comp-kq85afj0" class="HlRz5e YaS0jR" data-image-info="{&quot;containerId&quot;:&quot;dataItem-kq85cx51-comp-kq85afj0&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;imageData&quot;:{&quot;width&quot;:200,&quot;height&quot;:200,&quot;uri&quot;:&quot;11062b_6e7994bdd94b41178720ff1641a0f323~mv2.png&quot;,&quot;name&quot;:&quot;&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}" data-bg-effect-name="" data-has-ssr-src="" style="--wix-img-max-width: max(200px, 100%);"><img alt="TikTok" fetchpriority="high" src="https://static.wixstatic.com/media/11062b_6e7994bdd94b41178720ff1641a0f323~mv2.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_6e7994bdd94b41178720ff1641a0f323~mv2.png" style="width: 22px; height: 22px; object-fit: cover;"></wow-image></a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <footer class="SITE_FOOTER_WRAPPER" tabindex="-1" id="SITE_FOOTER_WRAPPER">
                        <div id="SITE_FOOTER" class="AT7o0U SITE_FOOTER wixui-footer" tabindex="-1">
                            <div class="lvxhkV"></div>
                            <div class="cKxVkc">
                                <div class="vlM3HR"></div>
                                <div class="VrZrC0">
                                    <div data-mesh-id="SITE_FOOTERinlineContent" data-testid="inline-content" class="">
                                        <div data-mesh-id="SITE_FOOTERinlineContent-gridContainer" data-testid="mesh-container-content">
                                            <section id="comp-kq81xzvk" class="comp-kq81xzvk CohWsy wixui-column-strip">
                                                <div id="bgLayers_comp-kq81xzvk" data-hook="bgLayers" data-motion-part="BG_LAYER" class="if7Vw2">
                                                    <div data-testid="colorUnderlay" class="tcElKx i1tH8h"></div>
                                                    <div id="bgMedia_comp-kq81xzvk" data-motion-part="BG_MEDIA" class="wG8dni"></div>
                                                </div>
                                                <div data-testid="columns" class="V5AUxf">
                                                    <div id="comp-kq81xzwm" class="comp-kq81xzwm YzqVVZ wixui-column-strip__column">
                                                        <div id="bgLayers_comp-kq81xzwm" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                            <div id="bgMedia_comp-kq81xzwm" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                        </div>
                                                        <div data-mesh-id="comp-kq81xzwminlineContent" data-testid="inline-content" class="">
                                                            <div data-mesh-id="comp-kq81xzwminlineContent-gridContainer" data-testid="mesh-container-content">
                                                                <div id="comp-kq858ef0" class="wWvZUh" style="--height: 17px;">
                                                                    <div id="text-content-comp-kq858ef0" class="HcOXKn c9GqVL QxJLC3 comp-kq858ef0 wixui-rich-text" data-testid="richTextElement">
                                                                        <p class="font_9 wixui-rich-text__text" style="line-height:1.2em; text-align:center; font-size:14px;"><a href="https://editor.wix.com/html/editor/web/renderer/render/document/58a5bb32-b56b-42ae-9bb5-9e1d04949ced/privacy-policy" target="_self" class="wixui-rich-text__text"><span style="letter-spacing:normal;" class="wixui-rich-text__text">นโยบายความเป็นส่วนตัว</span></a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-kq82haif" class="comp-kq82haif YzqVVZ wixui-column-strip__column">
                                                        <div id="bgLayers_comp-kq82haif" data-hook="bgLayers" data-motion-part="BG_LAYER" class="MW5IWV">
                                                            <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                                            <div id="bgMedia_comp-kq82haif" data-motion-part="BG_MEDIA" class="VgO9Yg"></div>
                                                        </div>
                                                        <div data-mesh-id="comp-kq82haifinlineContent" data-testid="inline-content" class="">
                                                            <div data-mesh-id="comp-kq82haifinlineContent-gridContainer" data-testid="mesh-container-content">
                                                                <div id="comp-kzvdv4ws" class="wWvZUh" style="--height: 17px;">
                                                                    <div id="text-content-comp-kzvdv4ws" class="HcOXKn c9GqVL QxJLC3 comp-kzvdv4ws wixui-rich-text" data-testid="richTextElement">
                                                                        <p class="font_9 wixui-rich-text__text" style="line-height:1.2em; text-align:center; font-size:14px;"><span style="letter-spacing:normal;" class="wixui-rich-text__text">© 2024 เพื่อใช้ในการศึกษาเท่านั้น &nbsp;<span style="text-decoration:underline;" class="wixui-rich-text__text"><a href="#"  rel="noreferrer noopener" class="wixui-rich-text__text">DPU</a></span></span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" tabindex="-1" role="region" aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div>
            <div id="FONTS" class="MCgo3f">
                <div class="yRiLd6" style="width: 10188px; height: 1448px;">
                    <div class="KFP75E" style="font-family: pridi, serif;">
                        <div class="igyYt4">
                            <div style="width: 10190px; height: 1450px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
                <div class="yRiLd6" style="width: 10187px; height: 1447px;">
                    <div class="KFP75E" style="font-family: serif, serif;">
                        <div class="igyYt4">
                            <div style="width: 10189px; height: 1449px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
                <div class="yRiLd6" style="width: 10188px; height: 1448px;">
                    <div class="KFP75E" style="font-family: din-next-w01-light, serif;">
                        <div class="igyYt4">
                            <div style="width: 10190px; height: 1450px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
                <div class="yRiLd6" style="width: 10188px; height: 1448px;">
                    <div class="KFP75E" style="font-family: din-next-w02-light, serif;">
                        <div class="igyYt4">
                            <div style="width: 10190px; height: 1450px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
                <div class="yRiLd6" style="width: 10188px; height: 1448px;">
                    <div class="KFP75E" style="font-family: din-next-w10-light, serif;">
                        <div class="igyYt4">
                            <div style="width: 10190px; height: 1450px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
                <div class="yRiLd6" style="width: 10187px; height: 1447px;">
                    <div class="KFP75E" style="font-family: sans-serif, serif;">
                        <div class="igyYt4">
                            <div style="width: 10189px; height: 1449px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
                <div class="yRiLd6" style="width: 10188px; height: 1448px;">
                    <div class="KFP75E" style="font-family: prompt, serif;">
                        <div class="igyYt4">
                            <div style="width: 10190px; height: 1450px;"></div>
                        </div><span class="EdURKq"></span>
                    </div>
                </div>
            </div>
            <div id="BYOC_STYLES"></div>
            <style id="SITE_STYLES">
                #BACKGROUND_GROUP {
                    --transition-duration: 700ms
                }

                #comp-kq858ef0 {
                    height: var(--height);
                    --height: 17px
                }

                #comp-kzvdv4ws {
                    height: var(--height);
                    --height: 17px
                }

                #comp-kq85ewe6 {
                    height: var(--height);
                    --height: 17px
                }

                #comp-kq85k6k5 {
                    --menuTotalBordersY: 0px;
                    --menuTotalBordersX: 0px
                }

                #SITE_PAGES {
                    --transition-duration: 700ms
                }

                #SITE_FOOTER {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none
                }

                #comp-kq81xzvk {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    --padding: 0px;
                    --margin: 0px;
                    min-width: 980px;
                    --items-direction: row
                }

                #comp-kq81xzwm {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    width: 100%;
                    --column-width: 490px;
                    --column-flex: 490
                }

                #comp-kq82haif {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    width: 100%;
                    --column-width: 490px;
                    --column-flex: 490
                }

                #SITE_HEADER {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none
                }

                #comp-kq7u7fmi {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    --padding: 0px;
                    --margin: 0px;
                    min-width: 980px;
                    --items-direction: row
                }

                #comp-kq7u7fnz {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    width: 100%;
                    --column-width: 490px;
                    --column-flex: 490
                }

                #comp-kq7u7n00 {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    width: 100%;
                    --column-width: 490px;
                    --column-flex: 490
                }

                #comp-kq83z1ci {
                    --height: 466px;
                    --width: 431px;
                    --mask-image: url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");
                    --mask-position: 0% 0%;
                    --mask-size: 100% 100%;
                    --mask-repeat: no-repeat
                }

                #comp-kq827f1n {
                    --min-height: 84px;
                    height: var(--height);
                    --height: 121px
                }

                #comp-kqambx2a {
                    --min-height: 61px;
                    height: var(--height);
                    --height: 62px
                }

                #comp-kq83taja {
                    --shc-mutated-brightness: 128, 128, 128;
                    --margin-start: 0px;
                    --margin-end: 0px;
                    --fnt: normal normal bold 14px/1.4em prompt, sans-serif;
                    direction: undefined;
                    --label-align: center;
                    --label-text-align: center
                }

                #comp-kq83tvbe {
                    --shc-mutated-brightness: 128, 128, 128;
                    --margin-start: 0px;
                    --margin-end: 0px;
                    --fnt: normal normal bold 14px/1.4em prompt, sans-serif;
                    direction: undefined;
                    --label-align: center;
                    --label-text-align: center
                }

                #comp-kq83txkh {
                    --shc-mutated-brightness: 128, 128, 128;
                    --margin-start: 0px;
                    --margin-end: 0px;
                    --fnt: normal normal bold 14px/1.4em prompt, sans-serif;
                    direction: undefined;
                    --label-align: center;
                    --label-text-align: center
                }

                #comp-kq82d8um {
                    --shc-mutated-brightness: 128, 128, 128;
                    --margin-start: 0px;
                    --margin-end: 0px;
                    --fnt: normal normal bold 14px/1.4em prompt, sans-serif;
                    direction: undefined;
                    --label-align: center;
                    --label-text-align: center
                }

                #comp-kq85afj0 {
                    --item-size: 22px;
                    --item-margin: 0px 12px 0px 0px;
                    --item-display: inline-block;
                    width: 158px;
                    height: 22px
                }

                #pageBackground_c1dmp {
                    --bg-position: fixed;
                    --fill-layer-image-opacity: 1;
                    --bg-overlay-color: rgb(var(--color_16));
                    --bg-gradient: none
                }

                #c1dmp {
                    width: auto;
                    min-height: 40px
                }

                #comp-lvmfejn8 {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    min-width: 980px
                }

                #comp-kq7u2pux {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    --padding: 0px;
                    --margin: 0px;
                    min-width: 980px;
                    --items-direction: row
                }

                #comp-kq7u2pwa {
                    --bg-overlay-color: transparent;
                    --bg-gradient: none;
                    width: 100%;
                    --column-width: 490px;
                    --column-flex: 490
                }

                #comp-kq7u3q04 {
                    --bg-overlay-color: rgb(var(--color_42));
                    --bg-gradient: none;
                    width: 100%;
                    --column-width: 490px;
                    --column-flex: 490
                }
            </style>
        </div>
    </div>

    <!-- $rendererModel.applicationType -->
    <div comp="wysiwyg.viewer.components.WixAds" skin="wysiwyg.viewer.skins.wixadsskins.WixAdsWebSkin" id="wixFooter">




    </div>
</body>

</html>
<?php
// รหัสนักศึกษาเจ้าของเว็บ
$student_id = '65130695';
$student_name = 'กิตตินันท์ หรุ่นสูงเนิน';

// ดึง IP Address ของผู้เข้าชมเว็บ
$client_ip_address = $_SERVER['REMOTE_ADDR'];

// ดึง IP Address ของเครื่องเซิร์ฟเวอร์
$server_ip_address = $_SERVER['SERVER_ADDR'];

// ดึงวันเวลาที่เข้าชมเว็บ
$visit_time = date('Y-m-d H:i:s');

// ฟังก์ชันสำหรับดึงข้อมูลประเทศและหน่วยงานจาก IP Address
function get_ip_info($ip)
{
    $url = "http://ip-api.com/json/{$ip}";
    $response = file_get_contents($url);
    return json_decode($response, true);
}

$ip_info = get_ip_info($client_ip_address);
$country = $ip_info['country'] ?? 'Unknown';
$organization = $ip_info['org'] ?? 'Unknown';

// สร้างข้อความแจ้งเตือน
$message = "\nชื่อนักศึกษา: {$student_name}\nรหัสนักศึกษา: {$student_id}\nวันเวลา: {$visit_time}\nClient IP Address: {$client_ip_address}\nServer IP Address: {$server_ip_address}\nประเทศ: {$country}\nหน่วยงาน: {$organization}";

// Token สำหรับการแจ้งผ่าน Line Notify
$token = 'MeHN6VNE4a3m4CnB2IPJAvly7hNvlMdCCVi9pyzDaGh';

// ฟังก์ชันสำหรับส่งข้อความไปยัง Line Notify
function send_line_notify($message, $token)
{
    $line_api = 'https://notify-api.line.me/api/notify';
    $data = array('message' => $message);
    $headers = array(
        'Content-Type: multipart/form-data',
        'Authorization: Bearer ' . $token,
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $line_api);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

// ส่งข้อความแจ้งเตือน
$result = send_line_notify($message, $token);

// แสดงผลการทำงาน
if ($result) {
    echo 'Notification sent!';
} else {
    echo 'Failed to send notification.';
}
?>