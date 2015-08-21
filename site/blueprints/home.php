<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  user:
    label: user
    type:  text
  intro:
    label: Intro
    type:  text
  text:
    label: Text
    type:  textarea
  subtext:
    label: Subtext
    type:  textarea
  upsite:
    label: Upsite
    type:  textarea
  address:
    label: Address
    type:  text
  city:
    label: City
    type:  text
  state:
    label: State
    type:  text
  zip:
    label: Zip code
    type:  text
  Country:
    label: country
    type:  text
  phone:
    label: Phone
    type:  tel
  email:
    label: Email
    type:  email
  copyright:
    label: Copyright
    type:  text
  hero_image:
    label: hero image
    type:  selector
    mode:  single
    types: 
      - image
  website_request_image:
    label: website request image
    type:  selector
    mode:  single
    types: 
      - image
  our_work_images:
    label: our work images
    type:  structure
    fields: 
      image:
        label: image
        type:  selector
        mode:  single
        types: 
          - image

