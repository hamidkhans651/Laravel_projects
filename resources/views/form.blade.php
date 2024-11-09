<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Dark UI - Bank dashboard concept</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="/public/css/Dashboard.css">
    <link rel="stylesheet" href="styles.css">



</head>

<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 2px;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            margin: auto;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            padding: 12px 20px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }



        @import url("https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");


        body.light-mode {
            --c-gray-900: #f1f1f1;
            --c-gray-800: #ffffff;
            --c-gray-700: #e0e0e0;
            --c-gray-600: #d4d4d4;
            --c-gray-500: #555;
            --c-gray-400: #444;
            --c-gray-300: #333;
            --c-gray-200: #222;
            --c-gray-100: #1a1a1a;
            --c-text-primary: #000;
            --c-text-secondary: #333;
            --c-text-tertiary: #555;
        }

    /* form end  */

        :root {
            --c-gray-900: #1F1F1F;
            --c-gray-800: #1f1f1f;
            --c-gray-700: #2e2e2e;
            --c-gray-600: #313131;
            --c-gray-500: #969593;
            --c-gray-400: #a6a6a6;
            --c-gray-300: #bdbbb7;
            --c-gray-200: #f1f1f1;
            --c-gray-100: #ffffff;
            --c-green-500: #45ffbc;
            --c-olive-500: #e3ffa8;
            --c-white: var(--c-gray-100);
            --c-text-primary: var(--c-gray-100);
            --c-text-secondary: var(--c-gray-200);
            --c-text-tertiary: var(--c-gray-500);
        }

        .dark-mode-toggle button svg {
            fill: var(--c-text-primary);
            /* Adjust color as needed */
            transition: fill 0.25s ease;
        }

        .dark-mode-toggle button:hover svg {
            fill: var(--c-gray-500);
            /* Change on hover */
        }



        body {
            line-height: 1.5;
            ;
            min-height: 100vh;
            height: 100%;
            font-family: "Be Vietnam Pro", sans-serif;
            background-color: var(--c-gray-900);
            color: var(--c-text-primary);
            display: flex;
            padding-top: 3vw;
            padding-bottom: 3vw;
            justify-content: center;
        }


        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        img {
            display: block;
            max-width: 100%;
        }

        button,
        select,
        input,
        textarea {
            font: inherit;
        }

        a {
            color: inherit;
        }

        .responsive-wrapper {
            width: 90%;
            max-width: 1600px;
            margin-left: auto;
            margin-right: auto;
        }

        .app {
            min-height: 100%;
            height: 100%;
            width: 100%;
            max-width: 1600px;
            background-color: var(--c-gray-800);
            padding: 2vw 4vw 6vw;
            display: flex;
            flex-direction: column;
            border: solid black 2px;

        }

        .app-header {
            display: grid;
            grid-template-columns: minmax(-webkit-min-content, 175px) minmax(-webkit-max-content, 1fr) minmax(-webkit-max-content, 400px);
            grid-template-columns: minmax(min-content, 175px) minmax(max-content, 1fr) minmax(max-content, 400px);
            -moz-column-gap: 4rem;
            column-gap: 4rem;
            align-items: flex-end;
            border: solid black 2px;

        }

        @media (max-width: 1200px) {
            .app-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                border-bottom: 1px solid var(--c-gray-600);
                
            }
        }

        @media (max-width: 1200px) {
            .app-header-navigation {
                display: none;
            }
        }

        .app-header-actions {
            display: flex;
            align-items: center;
        }

        @media (max-width: 1200px) {
            .app-header-actions {
                display: none;
            }
        }

        .app-header-actions-buttons {
            display: flex;
            border-left: 1px solid var(--c-gray-600);
            margin-left: 2rem;
            padding-left: 2rem;
        }

        .app-header-actions-buttons>*+* {
            margin-left: 1rem;
        }

        .app-header-mobile {
            display: none;
        }

        @media (max-width: 1200px) {
            .app-header-mobile {
                display: flex;
            }
        }

        .app-body {
            height: 100%;
            display: grid;
            grid-template-columns: minmax(-webkit-min-content, 175px) minmax(-webkit-max-content, 1fr) minmax(-webkit-min-content, 400px);
            grid-template-columns: minmax(min-content, 175px) minmax(max-content, 1fr) minmax(min-content, 40px);
        
            padding-top: 2.5rem;
            border: solid black 2px;

        }

        @media (max-width: 1200px) {
            .app-body {
                grid-template-columns: 1fr;
            }

            .app-body>* {
                margin-bottom: 3.5rem;
            }
        }

        .app-body-navigation {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @media (max-width: 1200px) {
            .app-body-navigation {
                display: none;
            }
        }

        .footer {
            margin-top: auto;
        }

        .footer h1 {
            font-size: 1.5rem;
            line-height: 1.125;
            display: flex;
            align-items: flex-start;
        }

        .footer h1 small {
            font-size: 0.5em;
            margin-left: 0.25em;
        }

        .footer div {
            border-top: 1px solid var(--c-gray-600);
            margin-top: 1.5rem;
            padding-top: 1rem;
            font-size: 0.75rem;
            color: var(--c-text-tertiary);
        }

        .logo {
            display: flex;
            align-items: center;
            padding-bottom: 1rem;
            padding-top: 1rem;
            border-bottom: 1px solid var(--c-gray-600);
        }

        @media (max-width: 1200px) {
            .logo {
                border-bottom: 0;
            }
        }

        .logo-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
        }

        .logo-title {
            display: flex;
            flex-direction: column;
            line-height: 1.25;
            margin-left: 0.75rem;
        }

        .logo-title span:first-child {
            color: var(--c-text-primary);
        }

        .logo-title span:last-child {
            color: var(--c-text-tertiary);
        }

        .navigation {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            color: var(--c-text-tertiary);
        }

        .navigation a {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: 0.25s ease;
        }

        .navigation a * {
            transition: 0.25s ease;
        }

        .navigation a i {
            margin-right: 0.75rem;
            font-size: 1.25em;
            flex-shrink: 0;
        }

        .navigation a+a {
            margin-top: 1.25rem;
        }

        .navigation a:hover,
        .navigation a:focus {
            transform: translateX(4px);
            color: var(--c-text-primary);
        }

        .tabs {
            display: flex;
            justify-content: space-between;
            color: var(--c-text-tertiary);
            border-bottom: 1px solid var(--c-gray-600);
        }

        .tabs a {
            padding-top: 1rem;
            padding-bottom: 1rem;
            text-decoration: none;
            border-top: 2px solid transparent;
            display: inline-flex;
            transition: 0.25s ease;
        }

        .tabs a.active,
        .tabs a:hover,
        .tabs a:focus {
            color: var(--c-text-primary);
            border-color: var(--c-text-primary);
        }

        .user-profile {
            display: flex;
            align-items: center;
            border: 0;
            background: transparent;
            cursor: pointer;
            color: var(--c-text-tertiary);
            transition: 0.25s ease;
        }

        .user-profile:hover,
        .user-profile:focus {
            color: var(--c-text-primary);
        }

        .user-profile:hover span:last-child,
        .user-profile:focus span:last-child {
            box-shadow: 0 0 0 4px var(--c-gray-800), 0 0 0 5px var(--c-text-tertiary);
        }

        .user-profile span:first-child {
            display: flex;
            font-size: 1.125rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--c-gray-600);
            font-weight: 300;
        }

        .user-profile span:last-child {
            transition: 0.25s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            margin-left: 1.5rem;
            flex-shrink: 0;
        }

        .icon-button {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 0;
            background-color: transparent;
            border: 1px solid var(--c-gray-500);
            color: var(--c-text-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.25s ease;
            flex-shrink: 0;
        }

        .icon-button.large {
            width: 42px;
            height: 42px;
            font-size: 1.25em;
        }

        .icon-button i {
            transition: 0.25s ease;
        }

        .icon-button:hover,
        .icon-button:focus {
            background-color: var(--c-gray-600);
            box-shadow: 0 0 0 4px var(--c-gray-800), 0 0 0 5px var(--c-text-tertiary);
        }

        .tiles {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            -moz-column-gap: 1rem;
            column-gap: 1rem;
            row-gap: 1rem;
            margin-top: 1.25rem;
        }

        @media (max-width: 700px) {
            .tiles {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .tile {
            padding: 1rem;
            border-radius: 8px;
            background-color: var(--c-olive-500);
            color: var(--c-gray-900);
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            transition: 0.25s ease;
        }

        .tile:hover {
            transform: translateY(-5px);
        }

        .tile:focus-within {
            box-shadow: 0 0 0 2px var(--c-gray-800), 0 0 0 4px var(--c-olive-500);
        }

        .tile:nth-child(2) {
            background-color: var(--c-green-500);
        }

        .tile:nth-child(2):focus-within {
            box-shadow: 0 0 0 2px var(--c-gray-800), 0 0 0 4px var(--c-green-500);
        }

        .tile:nth-child(3) {
            background-color: var(--c-gray-300);
        }

        .tile:nth-child(3):focus-within {
            box-shadow: 0 0 0 2px var(--c-gray-800), 0 0 0 4px var(--c-gray-300);
        }

        .tile a {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 600;
        }

        .tile a .icon-button {
            color: inherit;
            border-color: inherit;
        }

        .tile a .icon-button:hover,
        .tile a .icon-button:focus {
            background-color: transparent;
        }

        .tile a .icon-button:hover i,
        .tile a .icon-button:focus i {
            transform: none;
        }

        .tile a:focus {
            box-shadow: none;
        }

        .tile a:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .tile-header {
            display: flex;
            align-items: center;
        }

        .tile-header i {
            font-size: 2.5em;
        }

        .tile-header h3 {
            display: flex;
            flex-direction: column;
            line-height: 1.375;
            margin-left: 0.5rem;
        }

        .tile-header h3 span:first-child {
            font-weight: 600;
        }

        .tile-header h3 span:last-child {
            font-size: 0.825em;
            font-weight: 200;
        }

        .service-section>h2 {
            font-size: 1.5rem;
            margin-bottom: 1.25rem;
        }

        .service-section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .service-section-header>*+* {
            margin-left: 1.25rem;
        }

        @media (max-width: 1000px) {
            .service-section-header {
                display: none;
            }
        }

        .service-section-footer {
            color: var(--c-text-tertiary);
            margin-top: 1rem;
        }

        .search-field {
            display: flex;
            flex-grow: 1;
            position: relative;
        }

        .search-field input {
            width: 100%;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            border: 0;
            border-bottom: 1px solid var(--c-gray-600);
            background-color: transparent;
            padding-left: 1.5rem;
        }

        .search-field i {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .dropdown-field {
            display: flex;
            flex-grow: 1;
            position: relative;
        }

        .dropdown-field select {
            width: 100%;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            border: 0;
            border-bottom: 1px solid var(--c-gray-600);
            background-color: transparent;
            padding-right: 1.5rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            color: var(--c-text-tertiary);
            width: 100%;
        }

        .dropdown-field i {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .flat-button {
            border-radius: 6px;
            background-color: var(--c-gray-700);
            padding: 0.5em 1.5em;
            border: 0;
            color: var(--c-text-secondary);
            transition: 0.25s ease;
            cursor: pointer;
        }

        .flat-button:hover,
        .flat-button:focus {
            background-color: var(--c-gray-600);
        }

        .mobile-only {
            display: none;
        }

        @media (max-width: 1000px) {
            .mobile-only {
                display: inline-flex;
            }
        }

        .transfer-section {
            margin-top: 2.5rem;
        }

        .transfer-section-header {
            display: flex;
            align-items: center;
            width: 100%;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--c-gray-600);
        }

        .transfer-section-header h2 {
            font-size: 1.5rem;
        }

        .payments {
            display: flex;
            flex-direction: column;
            margin-top: 1.5rem;
        }

        .payment {
            display: flex;
            align-items: center;
        }

        .payment+* {
            margin-top: 1rem;
        }

        .card {
            width: 125px;
            padding: 0.375rem;
            aspect-ratio: 3/2;
            flex-shrink: 0;
            border-radius: 6px;
            color: var(--c-gray-800);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .card.green {
            background-color: var(--c-green-500);
        }

        .card.olive {
            background-color: var(--c-olive-500);
        }

        .card.gray {
            background-color: var(--c-gray-300);
        }

        .card span:last-child {
            align-self: flex-end;
        }

        .payment-details {
            display: flex;
            width: 100%;
            flex-direction: column;
            margin-left: 1.5rem;
        }

        .payment-details h3 {
            font-size: 1rem;
            color: var(--c-text-tertiary);
        }

        .payment-details div {
            margin-top: 0.75rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            border-top: 1px solid var(--c-gray-600);
            border-bottom: 1px solid var(--c-gray-600);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex: 1;
        }

        .payment-details div span {
            font-size: 1.5rem;
        }

        .filter-options {
            margin-left: 1.25rem;
            padding-left: 1.25rem;
            border-left: 1px solid var(--c-gray-600);
            display: flex;
            align-items: center;
            flex: 1 1 auto;
        }

        .filter-options p {
            color: var(--c-text-tertiary);
            font-size: 0.875rem;
        }

        .filter-options p+* {
            margin-left: auto;
            margin-right: 0.75rem;
        }

        @media (max-width: 1000px) {
            .filter-options p {
                display: none;
            }
        }

        .transfers {
            display: flex;
            flex-direction: column;
            margin-top: 1.5rem;
        }

        .transfer {
            display: flex;
            align-items: center;
            width: 100%;
            font-size: 0.875rem;
        }

        @media (max-width: 1000px) {
            .transfer {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        .transfer+* {
            margin-top: 2rem;
        }

        .transfer-logo {
            background-color: var(--c-gray-200);
            border-radius: 4px;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .transfer-logo img {
            width: 45%;
        }

        .transfer-details {
            margin-left: 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex: 1;
        }

        @media (max-width: 1000px) {
            .transfer-details {
                flex-wrap: wrap;
                margin-left: 0;
                margin-top: 1rem;
            }
        }

        .transfer-details div {
            width: calc(100% / 3 - 1rem);
        }

        @media (max-width: 1000px) {
            .transfer-details div {
                width: 100%;
            }
        }

        .transfer-details div+div {
            margin-left: 1rem;
        }

        @media (max-width: 1000px) {
            .transfer-details div+div {
                margin-left: 0;
                margin-top: 1rem;
            }
        }

        .transfer-details dd {
            color: var(--c-text-tertiary);
            margin-top: 2px;
        }

        .transfer-number {
            margin-left: 2rem;
            font-size: 1.125rem;
            flex-shrink: 0;
            width: 15%;
            display: flex;
            justify-content: flex-end;
        }

        @media (max-width: 1000px) {
            .transfer-number {
                margin-left: 0;
                margin-top: 1.25rem;
                width: 100%;
                justify-content: flex-start;
            }
        }

        .payment-section>h2 {
            font-size: 1.5rem;
        }

        .payment-section-header {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .payment-section-header p {
            color: var(--c-text-tertiary);
            font-size: 0.875rem;
        }

        .payment-section-header div {
            padding-left: 1rem;
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .payment-section-header div>*+* {
            margin-left: 0.5rem;
        }

        .card-button {
            display: flex;
            width: 50px;
            height: 34px;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: transparent;
            transition: 0.25s ease;
            border-radius: 4px;
            border: 2px solid var(--c-gray-600);
            color: var(--c-text-primary);
            cursor: pointer;
        }

        .card-button.mastercard svg {
            max-height: 15px;
        }

        .card-button:focus,
        .card-button:hover,
        .card-button.active {
            color: var(--c-gray-800);
            background-color: var(--c-white);
            border-color: var(--c-white);
        }

        .faq {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .faq p {
            color: var(--c-text-tertiary);
            font-size: 0.875rem;
        }

        .faq div {
            margin-top: 0.75rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            border-top: 1px solid var(--c-gray-600);
            border-bottom: 1px solid var(--c-gray-600);
            font-size: 0.875rem;
            display: flex;
            align-items: center;
        }

        .faq div label {
            padding-right: 1rem;
            margin-right: 1rem;
            border-right: 1px solid var(--c-gray-600);
        }

        .faq div input {
            border: 0;
            background-color: transparent;
            padding: 0.25em 0;
            width: 100%;
        }

        .payment-section-footer {
            display: flex;
            align-items: center;
            margin-top: 1.5rem;
        }

        .save-button {
            border: 1px solid currentColor;
            color: var(--c-text-tertiary);
            border-radius: 6px;
            padding: 0.75em 2.5em;
            background-color: transparent;
            transition: 0.25s ease;
            cursor: pointer;
        }

        .save-button:focus,
        .save-button:hover {
            color: var(--c-white);
        }

        .settings-button {
            display: flex;
            align-items: center;
            color: var(--c-text-tertiary);
            background-color: transparent;
            border: 0;
            padding: 0;
            margin-left: 1.5rem;
            cursor: pointer;
            transition: 0.25s ease;
        }

        .settings-button i {
            margin-right: 0.5rem;
        }

        .settings-button:focus,
        .settings-button:hover {
            color: var(--c-white);
        }

        input:focus,
        select:focus,
        a:focus,
        textarea:focus,
        button:focus {
            outline: 0;
            box-shadow: 0 0 0 2px var(--c-gray-800), 0 0 0 4px var(--c-gray-300);
        }
    </style>
    <!-- partial:index.partial.html -->
    <div class="app">
        <header class="app-header">
            <div class="app-header-logo">
                <div class="logo">
                    <span class="logo-icon">
                        <img src="https://assets.codepen.io/285131/almeria-logo.svg" />
                    </span>
                    <h1 class="logo-title">
                        <span>Almeria</span>
                        <span>NeoBank</span>
                    </h1>
                </div>
            </div>
            <div class="app-header-navigation">
                <div class="tabs">
                    <a href="#">
                        Buy
                    </a>
                    <a href="#" class="active">
                        Sell
                    </a>
                    <a href="#">
                        Find an Agent </a>
                    <a href="#">
                        Manage Rentals
                    </a>
                    <a href="#">
                        Advertise
                    </a>
                    <a href="#">
                        Help
                    </a>
                </div>
            </div>
            <div class="app-header-actions">
                <button class="user-profile">
                    <span>Matheo Peterson</span>
                    <span>
                        <img src="https://assets.codepen.io/285131/almeria-avatar.jpeg" />
                    </span>
                </button>
                <div class="app-header-actions-buttons">
                    <button class="icon-button large">
                        <i class="ph-magnifying-glass"></i>
                    </button>
                    <button class="icon-button large">
                        <i class="ph-bell"></i>
                    </button>
                    <div class="dark-mode-toggle">
                        <button id="darkModeToggle" class="icon-button large">

                            <svg id="lightModeIcon" width="24" height="24" viewBox="0 0 24 24" fill="black"
                                xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <path
                                    d="M11.875 4.375a.625.625 0 1 0 1.25 0c.001-.69.56-1.249 1.25-1.25a.625.625 0 1 0 0-1.25 1.252 1.252 0 0 1-1.25-1.25.625.625 0 1 0-1.25 0 1.252 1.252 0 0 1-1.25 1.25.625.625 0 1 0 0 1.25c.69.001 1.249.56 1.25 1.25Z" />
                            </svg>
                            <svg id="darkModeIcon" width="24" height="24" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" style="display: block;">
                                <path
                                    d="M7.019 1.985a1.55 1.55 0 0 0-.483-1.36 1.44 1.44 0 0 0-1.53-.277C2.056 1.553 0 4.5 0 7.9 0 12.352 3.648 16 8.1 16c3.407 0 6.246-2.058 7.51-4.963a1.446 1.446 0 0 0-.25-1.55 1.554 1.554 0 0 0-1.372-.502c-4.01.552-7.539-2.987-6.97-7ZM2 7.9C2 5.64 3.193 3.664 4.961 2.6 4.82 7.245 8.72 11.158 13.36 11.04 12.265 12.822 10.341 14 8.1 14 4.752 14 2 11.248 2 7.9Z" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
            <div class="app-header-mobile">
                <button class="icon-button large">
                    <i class="ph-list"></i>
                </button>
            </div>

        </header>
        <div class="app-body">
            <div class="app-body-navigation">
                <nav class="navigation">
                    <a href="/">
                        <i class="ph-browsers"></i>
                        <span>home</span>
                    </a>
                    <a href="#">
                        <i class="ph-check-square"></i>
                        <span>chats</span>
                    </a>
                    <a href="#">
                        <i class="ph-swap"></i>
                        <span>attendance</span>
                    </a>
                    <a href="#">
                        <i class="ph-file-text"></i>
                        <span>Property Owners</span>
                    </a>
                    <a href="{{ route('form') }}">
                        <i class="ph-file-text"></i>
                        <span> Add Properties</span>
                    </a>
                    <a href="/">
                        <i class="ph-clipboard-text"></i>
                        <span>Sign Out</span>
                    </a>

                </nav>
            </div>
            <div class="app-body-main-content">
                <section class="service-section">
                    <h2>Service</h2>
                    <div class="service-section-header">
                        <div class="search-field">
                            <i class="ph-magnifying-glass"></i>
                            <input type="text" placeholder="Address, Neighborhood, City, Zip code">
                        </div>
                        <div class="dropdown-field">
                            <select>
                                <option>select your home</option>
                                <option>House </option>
                                <option>Apartment</option>
                                <option>Land Plot</option>
                                <option>Commercial Space</option>
                                <option>Townhouse</option>
                            </select>
                            <i class="ph-caret-down"></i>
                        </div>
                        <button class="flat-button">
                            Search
                        </button>
                    </div>
                    <div class="mobile-only">
                        <button class="flat-button">
                            Toggle search
                        </button>
                    </div>

                    <section class="transfer-section">
                        <div class="transfer-section-header">
                            <h2>Latest Propterties</h2>
                            <div class="filter-options">
                                <p>Filter selected: more than 100 $</p>
                                <button class="icon-button">
                                    <i class="ph-funnel"></i>
                                </button>
                                <button class="icon-button">
                                    <i class="ph-plus"></i>
                                </button>
                            </div>
                        </div>



                        <!-- form starts here -->
                        <div class="form-container">
                            <h2>Add New Property</h2>
                            <form id="addPropertyForm" action="/submit-property" method="POST">

                                <!-- Property Name -->
                                <div class="form-group">
                                    <label for="propertyName">Property Name:</label>
                                    <input type="text" id="propertyName" name="propertyName" required>
                                </div>

                                <!-- Property Type -->
                                <div class="form-group">
                                    <label for="propertyType">Property Type:</label>
                                    <select id="propertyType" name="propertyType" required>
                                        <option value="apartment">Apartment</option>
                                        <option value="house">House</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="land">Land</option>
                                    </select>
                                </div>

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <textarea id="address" name="address" rows="3" required></textarea>
                                </div>

                                <!-- City -->
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" id="city" name="city" required>
                                </div>

                                <!-- State -->
                                <div class="form-group">
                                    <label for="state">State:</label>
                                    <input type="text" id="state" name="state" required>
                                </div>

                                <!-- Zip Code -->
                                <div class="form-group">
                                    <label for="zipCode">Zip Code:</label>
                                    <input type="text" id="zipCode" name="zipCode" required>
                                </div>

                                <!-- Price -->
                                <div class="form-group">
                                    <label for="price">Price ($):</label>
                                    <input type="number" id="price" name="price" required>
                                </div>

                                <!-- Bedrooms -->
                                <div class="form-group">
                                    <label for="bedrooms">Bedrooms:</label>
                                    <input type="number" id="bedrooms" name="bedrooms" min="0" required>
                                </div>

                                <!-- Bathrooms -->
                                <div class="form-group">
                                    <label for="bathrooms">Bathrooms:</label>
                                    <input type="number" id="bathrooms" name="bathrooms" min="0" required>
                                </div>

                                <!-- Square Footage -->
                                <div class="form-group">
                                    <label for="squareFootage">Square Footage (sq ft):</label>
                                    <input type="number" id="squareFootage" name="squareFootage" required>
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea id="description" name="description" rows="5"></textarea>
                                </div>

                                <!-- Image Upload -->
                                <div class="form-group">
                                    <label for="imageUpload">Upload Image:</label>
                                    <input type="file" id="imageUpload" name="imageUpload" accept="image/*" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" id="submitBtn">Add Property</button>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://unpkg.com/phosphor-icons'></script>
    <script src="./script.js"></script>



    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
        const lightModeIcon = document.getElementById('lightModeIcon');
        const darkModeIcon = document.getElementById('darkModeIcon');

        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('light-mode');

            // Toggle SVG icons and colors
            if (body.classList.contains('light-mode')) {
                lightModeIcon.style.display = 'block';
                darkModeIcon.style.display = 'none';
                lightModeIcon.setAttribute('fill', 'black'); // Ensure it's black in light mode
                localStorage.setItem('theme', 'light');
            } else {
                lightModeIcon.style.display = 'none';
                darkModeIcon.style.display = 'block';
                localStorage.setItem('theme', 'dark');
            }
        });
    </script>







</body>

</html>