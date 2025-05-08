---
title: Bài viết thứ hai
slug: bai-viet-thu-hai
media_order: banner3.webp
---

**Grav thường sử dụng tên của các thư mục để tạo ra một tuyến URL cho một trang cụ thể. Điều này cho phép kiến ​​trúc trang web dễ hiểu và triển khai như một tập hợp các thư mục lồng nhau. Tuy nhiên, với một trang web đa ngôn ngữ, bạn có thể muốn sử dụng một URL có ý nghĩa hơn trong ngôn ngữ cụ thể đó.**

Nếu chúng ta có cấu trúc thư mục sau:

- 01.animals
  - 01.mammals
    - 01.bats
    - 02.bears
    - 03.foxes
    - 04.cats
  - 02.reptiles
  - 03.birds
  - 04.insets
  - 05.aquatic
Điều này sẽ tạo ra các URL như http://yoursite.com/animals/mammals/bears. Điều này rất tuyệt đối với một trang web tiếng Anh, nhưng nếu bạn muốn có phiên bản tiếng Pháp, bạn sẽ muốn chúng được dịch một cách phù hợp. Cách dễ nhất để đạt được điều này là thêm một slug tùy chỉnh cho mỗi tệp fr.mdtrang. Ví dụ, trang động vật có vú có thể trông giống như sau:
![banner3](banner3.webp "banner3")