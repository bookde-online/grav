---
title: Contact form
metadata :
        description: Customer Information 
        keywords: contact information , contact 
form:
    name: contact

    fields:
        name:
          label: Name
          placeholder: Your name
          autocomplete: on
          type: text
          validate:
            required: true
        
        phone:
          label: Phone
          placeholder: Your phone
          type: tel
          validate:
            required: true

        email:
          label: Email
          placeholder: Your email
          type: email
          validate:
            required: true

        message:
          label: Message
          placeholder: Leave your message
          type: textarea
          validate:
            required: true

        g-recaptcha-response:
          label: Captcha
          type: captcha
          recaptcha_not_validated: 'Captcha not valid!'

    buttons:
        
        # reset:
        #   type: reset
        #   value: Reset

        submit:
          type: submit
          value: Submit

    process:
        # captcha: true
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        email:
            to: '{{ config.plugins.email.from }}'
            subject: "[Contact] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: Cảm ơn bạn đã liên hệ!
        reset: true
---

# Contact form

Some sample page content
