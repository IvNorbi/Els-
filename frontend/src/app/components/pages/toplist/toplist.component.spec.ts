import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ToplistComponent } from './toplist.component';

describe('ToplistComponent', () => {
  let component: ToplistComponent;
  let fixture: ComponentFixture<ToplistComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ToplistComponent]
    });
    fixture = TestBed.createComponent(ToplistComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
