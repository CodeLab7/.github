# Email Template explained.

# Mail Layout

### Our Standard HTML Email Template is [here](https://github.com/CodeLab7/.github/blob/main/templates/laravel/email-layout.blade.php)

### **Creating a Layout for Emails**

*   In Laravel, we organize email templates in the `resources/views/emails/` directory. The first step is to create a **layout Blade file** that contains common elements (e.g., header, footer, logos) that will be used across multiple email templates.



*   **Steps**

    *   Navigate to the `resources/views/emails/` directory in your Laravel project.
    *   Create a new Blade file for the email layout, for example: `layout.blade.php`.
    *   This layout will be your main reusable structure, where the header, footer, and content will be dynamically injected using Blade’s `@yield` directive.

        ```xml
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="color-scheme" content="light">
            <meta name="supported-color-schemes" content="light">
            <title>@yield('title')</title> // Get the title
        </head>
        
        <body>
            <table> // this is main table
                <tr>
                    <td>
                        <table> // child table
                            <tr>
                                <td>
                                    // Add the header
                                </td>
                            </tr>
                        </table>
                        <table> //another child table
                            <tr>
                                <td>
                                    <table> //another child table
                                        <tr>
                                            <td>
                                                @yield('content') // Get the content
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table> // child table
                            <tr>
                                <td>
                                    // Add the footer
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        
        </html>
        
        
        
        ```

    *   **Main Table Structure**

        *   Each section (header, content, footer) is wrapped in its own child table, which is a common practice in HTML emails for better alignment and layout control.

    *   **Dynamic Title**

        *   The `@yield('title')` directive allows you to insert dynamic titles for different email templates. A default title (`Default Title`) is used if no title is provided by the child template.

    *   **Header**

        *   The header contains a company logo and name, both of which can be customized or replaced by the child email templates if needed.

    *   **Content**

        *   The `@yield('content')` section will hold the main content of each specific email. This will be populated by individual email templates.

    *   **Footer**

        *   The footer section includes a dynamic year and common links like an unsubscribe link or app.

    *   **Inline CSS in HTML Emails Using PHP**

        *   **Why Use Inline CSS?**
        *   Email clients (like Gmail, Outlook) often strip out `<style>` tags, so inline CSS ensures consistent rendering.
        *   **Using PHP Variables for Inline CSS**
        *   Define common styles as PHP variables to avoid repetition:

            ```php
            <!DOCTYPE html>
            <html lang="en">
            <head>
            	<title>@yield('title')</title>
            </head>
            
            @php
            	$table_td = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size: 16px;";
            @endphp
            
            <body style="position: relative; font-size: 8px;">
                <table>
                    <tr>
                        <td style="{{$table_td}}"> // using php variable
                            <table>
                                <tr>
                                    <td style="{{$table_td}}"> // using php variable
                                        @yield('content')
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
            </html>
            ```

    *   **Key Tags & Styles**

        *   **Body (****`<body>`****)**: `background-color`, `font-family`, `font-size ..etc`
        *   **Table Cells (****`<td>`****,** **`<tr>`****)**: `padding`, `border`
        *   **Links (****`<a>`****)**: `color`, `text-decoration`
        *   **Buttons**: Use styled `<a>` for better compatibility




*   **Basic format for particular mail file**

    ```gherkin
    @extends('emails.layouts')
    @section('content')
    	<table>
    		<tr>
    			<td>
    				// gritings
    			</td>
    		</tr>
    		<tr>
    			<td></td> // subject or message
    		</tr>
    		<table>
    			<tr>
    				<td>
    					// your main content in table
    				</td>
    			</tr>
    		</table>
    		<table>
    			<tr>
    				<td>Regards,</td>
    			</tr>
    			<tr>
    				<td></td> // app name
    			</tr>
    		</table>
    	</table>
    @endsection
    ```




#### Test emails across different clients (such as Gmail, Outlook) using SMTP and ensure they are responsive.