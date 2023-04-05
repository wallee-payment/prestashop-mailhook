# Prestashop Mailhook
Introduces a hook to modify the email sending behavior in Prestashop. 

## Intention of this module

This module executes a hook when an e-mail is sent. This allows other modules to 
modify the mail message without overridding the `Mail` class. It provides 
better compatibility with multiple modules which tries to modify a mail message or
changing the mail sending behaviour.

By installing this module the hook 'actionMailSend' is triggered. As parameter a object
of type MailMessageEvent is provided. For more information about the object please see the 
file MailMessageEvent.php.

## Use Cases

Potential use cases of this module are:
 - Adding custom variables to e-mails.
 - Changing mail template based on certain criteria.
 - Use a different mail sending backend than Swift
 - Executing other actions when mail is sent (e.g. change order status)
 - Suppress sending of certain mails in some situations.

## Requirements

 - Prestshop Version 1.5, 1.6, 1.7, 8

## Installation

### Install from package

Go to the [list of releases](https://github.com/wallee-payment/prestashop-mailhook/releases) and download the latest package.
You can then upload the file as-is in your Prestashop's module manager.

### Install from source

Go to the /modules directory of your prestashop instance (replace PS_ROOT_DIR by the PATH to your prestashop instance):

```bash
cd PS_ROOT_DIR/modules
```

Get the code by cloning the github repository (note: the module directory name MUST be mailhook):

```bash
git clone --recursive https://github.com/wallee-payment/prestashop-mailhook.git mailhook
```
Install the module in the shop

If you are updating from an older version you might need to update manually the /overrides/classes/Mail.php file as the update mechanism not necessarily updates the file.

  
## Use Hook

For using the hook please visit the documentation of PrestaShop itself.

## License

Please see the [license file](./LICENSE) for more information.
