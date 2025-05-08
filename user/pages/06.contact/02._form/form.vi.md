---
title: Contact form
metadata :
        description: Thông tin khách hàng
        keywords: liên hệ , thông tin , khách hàng Bookde 
form:
    name: contact

    fields:
        name:
          label: Tên
          placeholder: Tên của bạn
          autocomplete: on
          type: text
          validate:
            required: true
        
        phone:
          label: Số điện thoại
          placeholder: Số điện thoại của bạn
          type: tel
          validate:
            required: true

        email:
          label: Email
          placeholder: Email của bạn
          type: email
          validate:
            required: true

        message:
          label: Lời nhắn
          placeholder: Để lại lời nhắn của bạn
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
            label: Gửi
            classes: btn btn-primary

    process:
        # captcha: true
        save: false
            # fileprefix: contact-
            # dateformat: Ymd-His-u
            # extension: txt
            # body: "{% include 'forms/data.txt.twig' %}"
        email:
            to: '{{ config.plugins.email.from }}'
            subject: "[Contact] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: Cảm ơn bạn đã liên hệ!
        reset: true
---

# Contact form

Some sample page content
