# prestashop-mailhook
Introduces a hook to modify mail behavior in Prestashop


## Intention of this module

This module executes a hook when an e-mail is sent. This allows other modules to 
modify the mail message without overridding the Mail class. It provides 
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

 - Prestshop version 1.5, 1.6 or 1.7

## Installation
 - Download this repository to your shops module folder
 - Rename the folder to mailhook
 - Install the module in the shop
 
 ## Use Hook

For using the hook please visit the documentation of PrestaShop itself.

## License

Please see the [license file](./LICENSE) for more information.